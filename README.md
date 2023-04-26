I) Phân tích:
1.	Phân rã quá trình nghiệp vụ (Decompose Business Process)
Các bước thực hiện:
-	Nhận bảng đăng ký
-	Bắt đầu gửi bảng đăng ký
-	Nhận thời gian và địa điểm thi cho khách hàng
-	Kiểm tra xem thời gian và địa điểm thi còn slot hay không
-	Nếu không còn slot tại thời điểm đó, từ chối gửi bảng đăng ký
-	Gửi thông tin thanh toán cho người dùng 
-	Lấy thông tin thanh toán 
-	Nếu thanh toán không thành công từ  chối gửi bảng đăng ký
-	Cập nhật thông tin đăng ký
-	Gửi tin nhắn đến người dùng
-	Gửi trả thông tin đăng ký, cập nhật trạng thái đăng ký và kết thúc quy trình
2.	Loại bỏ những hành động không cần thiết
-	Nhận bảng đăng ký (được thực hiện hoàn toàn bởi người dùng)
Các bước còn lại:
-	Bắt đầu gửi bảng đăng ký
-	Nhận thời gian và địa điểm thi cho khách hàng
-	Kiểm tra xem thời gian và địa điểm thi còn slot hay không
-	Nếu không còn slot tại thời điểm đó, từ chối gửi bảng đăng ký
-	Gửi thông tin thanh toán cho người dùng
-	Nếu thanh toán không thành công từ  chối gửi bảng đăng ký
-	Cập nhật thông tin đăng ký
-	Gửi tin nhắn đến người dùng
-	Gửi trả thông tin đăng ký, cập nhật trạng thái đăng ký và kết thúc quy trình
3.	Xác định ứng viên thực thể dịch vụ
Các thực thể:
![image](https://user-images.githubusercontent.com/108878258/233957609-76ff2420-dae8-4610-aba0-72e3f5b84bf1.png)

 
Các bước không bất khả tri sẽ được in đậm:
-	Bắt đầu gửi bảng đăng ký
-	Nhận thời gian và địa điểm thi cho khách hàng
-	Kiểm tra xem thời gian và địa điểm thi còn slot hay không
-	Nếu không còn slot tại thời điểm đó, từ chối gửi bảng đăng ký
-	Gửi thông tin thanh toán cho người dùng
-	Nhận trạng thái thanh toán 
-	Kiểm tra thông tin thanh toán 
-	Nếu thanh toán không thành công từ  chối gửi bảng đăng ký
-	Cập nhật thông tin đăng ký
-	Gửi tin nhắn đến người dùng
-	 Kết thúc quy trình

-	User:

o	Get Information

![image](https://user-images.githubusercontent.com/108878258/233957680-39d20877-b745-4777-b856-67c65ac2a187.png)

 
-	Vẽ ToeicRegistation:
o	Get PaymentState

o	Get time and address of the test


![image](https://user-images.githubusercontent.com/108878258/233957738-cb5d00a7-e921-42e6-88b5-44f292e2f587.png)


-	Payment
o	Get Customer

o	Get PayInformation


![image](https://user-images.githubusercontent.com/108878258/233957809-3761db7f-eaaf-4e1b-bfc3-8ba1d4b863d6.png)

 
-	Còn lại 
o	Gửi thông tin thanh toán cho người dùng

o	Gửi tin nhắn đến người dùng




4.	Xác định logic quy trình cụ thể
-	Bắt đầu gửi bảng đăng ký
-	Kiểm tra xem thời gian và địa điểm thi còn slot hay không
-	Nếu không còn slot tại thời điểm đó, từ chối gửi bảng đăng ký
-	Kiểm tra thông tin thanh toán 
-	Nếu thanh toán không thành công từ  chối gửi bảng đăng ký
-	Kết thúc quy trình

-	 ToeicRegisSubmit:

o	Start


![image](https://user-images.githubusercontent.com/108878258/233957921-9c54246e-6d98-4d8f-9c34-01653dcaea08.png)


5.	Áp dụng hướng dịch vụ
6.	Xác định ứng viên thành phần dịch vụ

 ![image](https://user-images.githubusercontent.com/108878258/233958319-6464034f-2d5f-4c51-a0d9-2895209ffa2d.png)


7.	Phân tích yêu cầu xử lý
8.	Xác định ứng viên dịch vụ tiện ích (utility service)
-	Còn lại các hành động khả tri là

o	Gửi thông tin thanh toán cho người dùng

o	Gửi tin nhắn đến người dùng

-	Nên tạo một utility service là :

o	Notification

	Send Message


![image](https://user-images.githubusercontent.com/108878258/233958413-877f0161-1e66-4056-8991-81007d546ef5.png)


9.	Xác định ứng vi MicroService 

-	Hành động xác nhận thông tin thanh toán là một phần của tác vụ ToeicRegisSubmisstion có thể tách ra

-	 ConfirmPayment

o	Confim

![image](https://user-images.githubusercontent.com/108878258/233958470-bee748f6-901b-49fa-86d6-be5b1f014ac0.png)


10.	 Áp dụng hướng dịch vụ
11.	 Xem xét lại các ứng viên thành phần dịch vụ
ToeicRegisSubmission

PaymentConfirm

User –ToeicRegistation – Payment

Notification

![image](https://user-images.githubusercontent.com/108878258/233958554-75c16f29-da5c-4b87-9093-4222820dca0c.png)


 
12.	 Xem cách thức ứng viên tiềm năng

II)	Thiết kế by REST service and Microservice(Design)

1.	Thiết kế Entity Service
User:

	Get/user/{user-id}

	Put/ user/{user-id}

	Search/user/{user-id}

	Store/user/{user-id}

![image](https://user-images.githubusercontent.com/108878258/233959100-f550feb3-3131-44f0-990f-bb4efa7df29b.png)


2.	ToeicRegistation:

	Get/ ToeicRegistation/{ ToeicRegistation-id}

	Put/ ToeicRegistation/{ ToeicRegistation-id}/user

	Search/ ToeicRegistation/{ ToeicRegistation-id}

	Store/ ToeicRegistation/{ ToeicRegistation-id}/user

![image](https://user-images.githubusercontent.com/108878258/233959338-12c5db84-7fb6-486d-9491-7b4620faf982.png)

 
3.	Payment
	Get/payment/{payment-id}

	Put/payment/{payment-id}/user

	Search/payment/{payment-id}

	Store/payment/{payment-id}/user
 
![image](https://user-images.githubusercontent.com/108878258/233959286-8e0741ab-0dd3-4817-b0b0-edb9c454fe81.png)


 
4.	Utility Service 
-	 UserSystem

	Get/testtime/{date}

	Get/user/{user-id}

	Get/testplace/{date}

![image](https://user-images.githubusercontent.com/108878258/233959422-e7bde979-5e52-4dcd-86fe-d05f80bdbf5c.png)


 
5.	 MicroService Design

![image](https://user-images.githubusercontent.com/108878258/233959464-99456902-1008-4d5a-928d-c8ae7d3f4626.png)

 
6.	Task Service Design
-	Confirm User

o	POST/start/{user,request-id}

o	GET/task{id}

o	DELETE/task{id}

![image](https://user-images.githubusercontent.com/108878258/233959537-ead8816a-67b5-4e47-a3c2-7d2d1298535b.png)


-	Confirm Test Time

o	POST/start/Test/{test-id}

o	GET/task{id}

o	DELETE/task{id}

![image](https://user-images.githubusercontent.com/108878258/233959666-bc60feaf-8d10-4865-8383-a4bfe881150a.png)


-	 Confirm Register

o	GET/confirm/toeicregistation-id

o	GET/task/{id}

o	DELETE/task/{id}

![image](https://user-images.githubusercontent.com/108878258/233959733-9a7849c3-b775-44ac-979a-38df929898b9.png)

	 
7.	Event Service Contract (Entity)
-	 TestTime Decribtion

o	GET/testtime/{id}

o	PUT/ testtime/{id}

![image](https://user-images.githubusercontent.com/108878258/233959821-b1e4e9c1-2d48-4ed5-b992-03c1d970d19d.png)


8.	Utility
-	Notification

o	POST/notification/

![image](https://user-images.githubusercontent.com/108878258/233959892-dd9f55ab-4ab1-405f-8315-ab793a27104f.png)


III) Công nghệ sử dụng:

* ngôn ngữ sử dựng :java

* Công nghệ web spring boot:

-Spring web:

+Chức năng:là một phần của Spring FrameWork cung cấp các lớp và phương 	thức để xử lý các yêu cầu http và phản hồi các đôi tượng

+Nơi triển khai:cả Toeic-service và Payment-service

-Spring Devtools:

+Chức năng:Hỗ trọ và đẩy nhanh qua trình phát triển dự án:

+Nơi triển khai:cả Toeic-service và Payment-service


-Spring DATA JPA:

+Chức năng:Trợ giúp việc truy vấn cơ sở dữ liệu

+Nơi Triển khai:cả Toeic-service và payment-service

-MySQl driver:

+Chức năng:Sử dụng nới lưu trư dữ liệu là MySQL

+Nơi triển khai:cả Toeic-service và Payment-service



*Công nghệ Cloud Service:

-Spring Eureka Server

+Chức năng:Quản lý và giám sát các microservices trong hệ thống phân tán

+Nơi triển khai:Service-registry

-Spring Discovery Client:

+Chức năng:Sử dụng để tìm kiếm và truy cập các service trong môi trường phân tán

+Nơi triển khai:cả Toeic-service và Payment-service



*Thư viện được sử dụng để tích hợp thanh toán PayPal:

-PayPal SDK:

+chức năng:Là thư viện cung cấp các lớp và phương thức để thực hiện các của gọi đến api của PayPal  để thực hiện các giao dịch thanh toán.

+Nơi triển khai:Payment-service




