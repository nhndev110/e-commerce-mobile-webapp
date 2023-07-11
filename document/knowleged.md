- Khi truyền dữ liệu dạng json bằng fetch thì chuyển
  Content-Type: application/x-www-form-urlencoded và phần
  body khởi tạo một đối tượng URLSearchParams:
  body: new URLSearchParams(data)

- Ngoài ra có thể dùng:

```php
  $_POST = json_decode(file_get_contents('php://input'), true);
```

với mọi phương thức đều dùng được

------------- SCSS / SASS -------------

```bash
sass --no-source-map --watch .\resources\assets\client\scss\style.scss:.\resources\assets\client\css\style.min.css --style compressed
```

------------- Cấu hình của 1 api -------------

```php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Credentials, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
```

### Cấu trúc thư mục của dự án:

```
E-commerce-Mobile-Selling-Website/
├── app/
│   ├── controllers/
│   ├── core/
│   ├── models/
│   ├── helpers/
│   ├── validations/
│   ├── services/
│   ├── views/
│   └── middlewares/
├── public/
│   ├── admin/
│   │   ├── css/
│   │   ├── js/
│   │   └── images/
│   └── client/
│       ├── css/
│       ├── js/
│       └── images/
│           └── products/
├── routes/
│   ├── api.php
│   └── web.php
├── vendor/
├── config/
├── .env
├── .env.example
├── .gitignore
├── .htaccess
├── composer.lock
├── composer.json
├── index.php
└── readme.md
```

- `app`: Chứa toàn bộ logic của ứng dụng, gồm các lớp controllers, models, views, helpers và các file validation và service.

  - `controllers`: Chứa các tệp tin mã nguồn của controllers để điều hướng và xử lý yêu cầu từ client.
  - `core`: Chứa các lớp, chức năng chung của hệ thống, có thể được sử dụng bởi các thành phần khác.
  - `models`: Chứa các lớp đại diện cho các đối tượng trong hệ thống, dùng để kết nối và truy vấn cơ sở dữ liệu.
  - `helpers`: Chứa các hàm tiện ích hỗ trợ việc phát triển.
  - `validations`: Chứa các tệp tin mã nguồn dùng để xác nhận dữ liệu gửi lên từ client.
  - `services`: Chứa các lớp giúp xử lý và chia sẻ các logic và chức năng chung cho toàn bộ hệ thống.

- `public`: Chứa các tệp tin tĩnh phục vụ cho trang web, bao gồm các tệp tin CSS, JavaScript và hình ảnh.

  - `css`: Chứa các tệp tin CSS để trình bày giao diện cho trang web.
  - `js`: Chứa các tệp tin JavaScript để xử lý các sự kiện và cập nhật nội dung cho trang web.
  - `images`: Chứa các tệp tin ảnh và hình ảnh của sản phẩm để hiển thị trên trang web.

- `routes`: Chứa các tệp tin định nghĩa các tuyến đường (route) cho ứng dụng.

  - `api.php`: Định nghĩa các API endpoints để cung cấp dữ liệu cho các ứng dụng khác.
  - `web.php`: Định nghĩa các tuyến đường web để hỗ trợ trang web.

- `config`: Chứa các tệp tin cấu hình của ứng dụng.
- `.env`: Chứa các thông tin cấu hình môi trường ứng dụng.
- `.env.example`: Một tệp mẫu để hướng dẫn cấu hình tệp `.env`.
- `.gitignore`: Liệt kê các tệp tin hoặc thư mục được bỏ qua khi sử dụng Git cho các công việc quản lý mã nguồn.
- `.htaccess`: Tệp tin cấu hình máy chủ để cấu hình web server (Apache) để xử lý các yêu cầu HTTP cho trang web.
- `composer.lock`: Chứa các thông tin về các gói phụ thuộc của ứng dụng.
- `composer.json`: Tệp cấu hình cho Composer - công cụ quản lý phụ thuộc của PHP.
- `index.php`: Tệp chính để ứng dụng phục vụ các yêu cầu từ client.
- `readme.md`: Tệp tin giải thích về ứng dụng và cách sử dụng nó.
- `vendor`: chứa những viện của bên thứ 3
