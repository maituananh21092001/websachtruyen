# team-project-n1_2
## Môn: Phát triển phần mềm hướng dịch vụ nhóm 01

## Nhóm bài tập 02

## Chủ đề: Xây dựng các ngân hàng về chủ để học TA.

Mô tả: Người dùng muốn học tiếng anh online với việc học theo từng chủ đề dựa vào chatGPT, người dùng nhập chủ đề cần tìm kiếm học và hệ thống sẽ gửi lại thông tin chủ đề cần cho người dùng: tiếng anh, tiếng việt, audio và thông báo đến email của người dùng.

### Bước 1: Phân rã quá trình thành các hoạt động chi tiết:
  Các bước của quá trình tìm kiếm chủ đề học tiếng anh: 
  
    -	Nhập đoạn chủ đề cần tìm.
    
    -	Nhận chủ đề tiếng anh cần tìm.
    
    -	Gửi chủ đề lên chatGPT
    
    -	Lấy đoạn nội dung chủ đề từ chatGPT
    
    -	Chia nhỏ đoạn nội dung chủ đề
    
    -	Lẫy mỗi đoạn nội dung chủ đề
    
    -	Các đoạn sẽ được gửi lên Google API.
    
    -	Nhận dữ liệu bao gồm: tiếng anh, tiếng việt, audio; liên quan đến đoạn nội dung và lưu vào Database
    
    -	Thông báo thành công hoặc thất bại.
    
    -	Hiện lên cho người dùng sử dụng.
    
    -	Lấy thông tin người dùng
    
    -	Gửi thông báo cho người dùng qua email.
    
### Bước 2: Loại bỏ những hành động không cần thiết.

    Loại bỏ bước “Nhập đoạn chủ đề cần tìm” vì bước này người dùng cần nhập thủ công không thể tự động hóa.
    Các bước còn lại là: 
    -	Nhận chủ đề tiếng anh cần tìm.
    -	Gửi chủ đề lên chatGPT
    -	Lấy đoạn nội dung chủ đề từ chatGPT
    -	Chia nhỏ đoạn nội dung chủ đề
    -	Lẫy mỗi đoạn nội dung chủ đề
    -	Các đoạn sẽ được gửi lên Google API.
    -	Nhận dữ liệu bao gồm: tiếng anh, tiếng việt, audio; liên quan đến đoạn nội dung và lưu vào Database
    -	Thông báo thành công hoặc thất bại.
    -	Hiện lên cho người dùng sử dụng.
    -	Lấy thông tin người dùng
    -	Gửi thông báo cho người dùng qua email.
### Bước 3: Xác định ứng viên dịch vụ thực thể:
![image](https://user-images.githubusercontent.com/87740670/228214601-7f93827a-3154-49ba-a477-cae814e956d6.png)
  
  Các bước được coi là không bất khả tri bao gồm: 
  
    -	Nhận chủ đề tiếng anh cần tìm.
    -	Gửi chủ đề lên chatGPT
    -	Các đoạn sẽ được gửi lên Google API.
    -	Hiện lên cho người dùng sử dụng.
    -	Gửi thông báo cho người dùng qua email.
    
  Thực thể NguoiDung sẽ có các dịch vụ thực thể sau:
  
    -	Lấy thông tin người dùng

  Thực thể ChuDe sẽ có các dịch vụ thực thể sau:
  
    -	Lấy đoạn nội dung chủ đề từ chatGPT
    -	Chia nhỏ đoạn nội dung chủ đề

  Thực thể DoanChuDe sẽ có các dịch vụ thực thể sau:
  
    -	Lẫy mỗi đoạn nội dung chủ đề
    -	Nhận dữ liệu bao gồm: tiếng anh, tiếng việt, audio; liên quan đến đoạn nội dung và lưu vào Database

  Ta có các ứng viên thực thể sau:
  
![image](https://user-images.githubusercontent.com/87740670/228217924-4e51f16c-dbcb-4a82-a538-92153a17b192.png)
![image](https://user-images.githubusercontent.com/87740670/228217941-3a3edded-dc2c-4ca3-a39e-495af18a885a.png)
![image](https://user-images.githubusercontent.com/87740670/228217953-f1417834-10ab-43e8-b2ba-126d07c94659.png)
### Bước 4: Xác định quy trình cụ thể:

  -	Khởi tạo
  -	Nhận chủ đề tiếng anh cần tìm.
  -	Gửi chủ đề lên chatGPT
  -	Các đoạn sẽ được gửi lên Google API.
  -	Hiện lên cho người dùng sử dụng.
  -	Gửi thông báo cho người dùng qua email.
  
  Hành động “Khởi tạo” đưuọc hình thành cơ sở của 1 ứng viên “ Timnoidungchudetienganh”: 
  
  ![image](https://user-images.githubusercontent.com/87740670/228218198-e5fca6a3-3541-4476-9f3d-8d7b97d09ba5.png)

### Bước 5: Xác định ứng viên thành phần dịch vụ:
![image](https://user-images.githubusercontent.com/87740670/228218669-9b7afe7f-9c63-48f3-8183-6741a1c0bd52.png)
### Bước 6: Xác định ứng viên dịch vụ tiện ích:
Thêm bước bất khả tri: “Thông báo thành công hoặc thất bại” vào ứng viên dịch vụ tiện ích “ThongBao”:

![image](https://user-images.githubusercontent.com/87740670/228218830-7e6f2638-c23a-4e09-88dc-a7bbeb4be0fd.png)
### Bước 7: Xem xét lại các ứng viên thành phần dịch vụ:
![image](https://user-images.githubusercontent.com/87740670/228218887-1f268f94-4f5b-490f-9209-e14d6bc22958.png)

## Phần thiết kế:
###1. Công nghệ:
 - Ngôn ngữ: Python
 - Framework: Django
 - Cơ sở dữ liệu: MySQL hoặc SQLite
 - Mô hình kiến trúc: Microservice
 - Công nghệ web: tạo giao diện với các thao tác cơ bản.
 
###2. Bài tập lớn sẽ bao gồm 3 service:
+ User_service: Chứa thông tin về thực thể User, có chứa email để nhận thông báo\
+ Search_service: Chứa thông tin về thực thể ChuDe và có mục đích để lấy chủ đề nội dung tiếng anh từ ChatGPT.
+ Translate_service: Chứa thông tin về thực thể DoanChuDe và có mục đích để dịch nội dung và lấy audio từ API Google Translate

Kiến trúc Microservice:

![image](https://user-images.githubusercontent.com/87740670/231186508-f8990972-47b3-45fd-8a99-d57df02ca906.png)
- Cấu trúc tệp thư mục với Django:

![image](https://user-images.githubusercontent.com/87740670/231186657-cd82dff0-9eba-45e2-8b3f-cdf331827427.png)
  + Với User_service: Có 3 thành phần với các chức năng khác nhau:
  
  . User_model: Chứa model tạo đối tượng user và api tạo user:
  
  ![image](https://user-images.githubusercontent.com/87740670/231186762-29e395d0-4641-42ce-a5dd-e211e19ef00d.png)
![image](https://user-images.githubusercontent.com/87740670/231186782-3d01bc2f-bf97-4137-9876-b7bef20047f5.png)

  . User_info: Chứa api liên quan đến thông tin User và gửi email:
  
  ![image](https://user-images.githubusercontent.com/87740670/231186854-c92d83af-fc37-401b-a821-3d1c45bdfca9.png)
  
  . User_login: chứa api liên quan đến việc đăng nhập và đăng xuất:
  
  ![image](https://user-images.githubusercontent.com/87740670/231186900-71706d64-865a-480b-b149-7b9ab3ba8a17.png)
  
  . User_service: là phần quản lý service tổng chứa các thành phần trên:
  
  ![image](https://user-images.githubusercontent.com/87740670/231186968-a1ca2219-ef67-4a1e-b22a-42fbca4bca1a.png)
  
  + Với Search_service: Có 2 thành phần với chức năng khác nhau:
  
  .Search_model: Chứa model tạo đối tượng ChuDe và api liên quan đến ChuDe:
  
  ![image](https://user-images.githubusercontent.com/87740670/231187109-1c9adeb7-e09d-46f7-8277-31523953d038.png)
  
   
   ![image](https://user-images.githubusercontent.com/87740670/231187153-58c33319-e003-4662-bd09-e14e4e1e9fd7.png)
   
  . ChatGPT: Phần quản lý liên quan đến ChatGPT:
  
  ![image](https://user-images.githubusercontent.com/87740670/231187232-31744d36-6102-4a49-a153-f5bc1c75d36e.png)
  
  + Với Translate_service: Có 2 thành phần với chức năng khác nhau:
  
  . Translate_model: Chứa model tạo đối tượng DoanChuDe và api liên quan đến DoanChuDe:
  
  ![image](https://user-images.githubusercontent.com/87740670/231187345-1dbca56d-b468-4e1e-b8d9-1a25b5720408.png)
  
  
  ![image](https://user-images.githubusercontent.com/87740670/231187412-7e1c3b86-3bfa-4ddf-b24b-f25695248992.png)
  
  .API_Google: Chứa các api liên quan đến google dùng để lấy thông tin chủ đề liên quan: tiếng anh, audio.
  
  ![image](https://user-images.githubusercontent.com/87740670/231187488-a55be07c-68cd-4e53-bc02-4e35c709d3d1.png)







