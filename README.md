# ct-519new
final 

หลักการออกแบบ 
แยกระบบออกเป็นหน้าบ้านและหลังบ้าน โดยใช้หน้าบ้านเป็น html+css+bootstrap และหลังบ้านเป็น php และฐานข้อมูลเป็น mysql ที่เป็น relation database และใช้ cloud Aws docker แบ่งเป็น frontend และ backend แยก container กัน ส่วน cloud ที่ใช้ deploy นั้นจะเป็น aws ec2 


สถาปัตยกรรม 
arm64 


topology ของระบบ 
1.frontend(html+css+bootstrap+javascript) connects to backend(php) method Post and get 2.backend connects to mariadb 3.each container connects to each other by docker network 


การออกแบบฐานข้อมูล 
ใช้ phpmyadmin สร้าง database my_hobbies สร้างตารางชื่อ hobbies_lish ประกอบด้วยคอลัมน์  sequence/ image / name / description  


การอธิบายส่วนของ code ที่สำคัญ 
จะเป็นด้านการทำระบบหลังบ้าน 
โดยเว็บประกอบด้วย
index.php เป็น static web แสดงข้อมูลต่างๆในภาพรวม ใช้วิธีการ include ('navbar.php') มาแสดงเมนู และ include ('footer.php') แสดงส่วน footer ของเว็บไซต์

โดยทุกหน้าจะเรียกเหมือนกันคือ include(navbar.php) , include(footer.php); ที่แตกต่างกันจะเป็นส่วน contence ใน page

about.php ใช้ html css bootstrap แสดงข้อมูลส่วนตัว

hobbies.php สร้าง form ให้สามารถ add hobbies โดยอ้างถึง action จาก add_hobbies.php ให้ช่วยในการเพิ่มข้อมูล

ใช้การ include หน้า hobbies1.php มาแสดง 

หน้า hobbies1.php ใช้คำสั่งเชื่อมต่อกับฐานข้อมูล ให้ดึงข้อมูลมาแสดง 

edit จากเมนูในหน้า hobbies1.php โดยอ้างถึง action จาก edit_hobbies.php โดยใช้ ลำดับ (sequence) เป็นเงื่อนไขการแก้ไข

deletet จากเมนูในหน้า hobbies1.php โดยอ้างถึง action จาก delete_hobbies.php โดยใช้ ลำดับ (sequence) เป็นเงื่อนไขการลบ

research.php หน้านี้จะเป็น html css bootstrap



การเตรียมการระบบ Cloud 
เป็นการใช้ ec2 โดยใช้ aws linux ในการทำ และ install docker environment รวมถึง git เพื่อ clone data มาเพื่อ deploy

version: '3' เป็นการระบุว่าเราจะใช้ Compose file เวอร์ชั่นไหน services:  เป็นการระบุ container ที่จะต้องใช้ มี 2 container คือ web and db web: build: ใช้ image ที่สร้างจาก Dockerfile context: ./myweb  path ไปที่ folder myweb dockerfile: Dockerfile เรียกใช้ Dockerfile container_name: myweb กำหนดชื่อ container ports: - "80:80" #map port 80 จาก ec2 ไป 80 docker volumes: - ./myweb:/var/www/html #สร้างพื้นที่การทำงานโดยให้ myweb ทำงานที่ /var/www/html

db: รระบุ container คือ db image: mariadb:10.4 #สั่งให้ใช้ image ที่ชื่อ mariadb:10.4 container_name: mariadb #ตั้งชื่อ container ว่า mariadb environment: ตั้งค่าสภาพแวดล้อม MYSQL_ROOT_PASSWORD: root กำหนด MYSQL_DATABASE: my_hobbies กำหนด MYSQL_USER: anianima  volumes: - ./mysql:/docker-entrypoint-initdb.d  กำหนดให้ใช้สภาพแวดล้อมใน folder mysql โดยมี sql create table and insert data ports: - "3306:3306" map port 80 จาก ec2 ไป 80 docker volumes: db_data:

การ deploy ตัว code มาทำงาน
1.สร้างเว็บและ sql ให้เรียบร้อย พร้อมทั้ง dockerfile และ docker-compose.yaml
2. เตรียม git ให้พร้อม
3.สร้าง repositories ct-519new
4.อัพโหลด 1 ขึ้น repositories ct-519new
5.ใน Aws install docker engine
6.ใน Aws install docker compose 
7.ใน command line git clone https://github.com/aniishappy/ct-519new
8.cd ct-519new
9.chmod -R 777 all file and folder
10.docker-compose up --build

กรณีทำผิดพลาดให้กลับไปแก้
sudo docker stop $(sudo docker ps -aq)
sudo docker rm $(sudo docker ps -aq)
ไปขั้นตอนที่ 7-11 ใหม่
