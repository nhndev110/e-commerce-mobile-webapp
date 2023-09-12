## **Phương thức truyền dữ liệu**

- Khi truyền dữ liệu dạng json bằng fetch thì chuyển
  Content-Type: application/x-www-form-urlencoded và phần
  body khởi tạo một đối tượng URLSearchParams:
  body: new URLSearchParams(data)

- Ngoài ra có thể dùng:

```php
  $_POST = json_decode(file_get_contents('php://input'), true);
```

với mọi phương thức đều dùng được

## **SCSS / SASS**

```bash
sass --no-source-map --watch .\resources\assets\scss\style.scss:.\public\assets\css\style.min.css --style compressed
```

## **Cấu hình API**

```php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Credentials, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
```

## **Cấu trúc thư mục của dự án**

```
E-commerce-Mobile-Selling-Website/
├── app/
│   ├── controllers/
│   ├── core/
│   ├── helpers/
│   ├── middlewares/
│   ├── views/
│   ├── models/
│   ├── services/
│   └── validations/
├── bootstrap/
│   └── app.php
├── config/
│   ├── database.conf.php
│   └── variables.conf.php
├── docs/
│   └── knowledge.md
├── public/
│   ├── assets/
│   │   ├── admin/
│   │   │   ├── css/
│   │   │   ├── images/
│   │   │   └── js/
│   │   ├── css/
│   │   ├── images/
│   │   └── js/
│   └── index.php
├── resources/
│   ├── assets/
│   │   ├── admin/
│   │   └── scss/
│   └── views/
├── routes/
│   ├── api.php
│   └── web.php
├── storage/
│   └── templates/
│       ├── cache/
│       ├── configs/
│       └── templates_c/
├── vendor/
├── .env
├── .env.example
├── .gitignore
├── .htaccess
├── composer.lock
├── composer.json
└── readme.md
```

Dưới đây là tác dụng của từng thư mục trong cấu trúc thư mục E-commerce-Mobile-Selling-Website:

- **app**
  - Thư mục này chứa tất cả mã của ứng dụng.
  - Thư mục `controllers` chứa các lớp điều khiển xử lý các yêu cầu từ người dùng.
  - Thư mục `core` chứa các lớp cơ sở được sử dụng bởi các lớp khác trong ứng dụng.
  - Thư mục `helpers` chứa các hàm hỗ trợ được sử dụng bởi các lớp khác trong ứng dụng.
  - Thư mục `middlewares` chứa các lớp xử lý các yêu cầu từ người dùng trước khi chúng được chuyển đến các lớp điều khiển.
  - Thư mục `views` chứa các tệp HTML được hiển thị cho người dùng.
  - Thư mục `models` chứa các lớp mô hình đại diện cho dữ liệu trong ứng dụng.
  - Thư mục `services` chứa các lớp dịch vụ cung cấp các chức năng cụ thể cho ứng dụng.
  - Thư mục `validations` chứa các lớp kiểm tra tính hợp lệ của dữ liệu đầu vào từ người dùng.
- **bootstrap**
  - Thư mục này chứa tệp `app.php` là tệp khởi động ứng dụng.
- **config**
  - Thư mục này chứa các tệp cấu hình của ứng dụng.
  - Tệp `database.conf.php` chứa cấu hình cơ sở dữ liệu của ứng dụng.
  - Tệp `variables.conf.php` chứa các biến môi trường của ứng dụng.
- **docs**
  - Thư mục này chứa tài liệu của ứng dụng.
  - Tệp `knowledge.md` chứa tài liệu về cách sử dụng ứng dụng.
- **public**
  - Thư mục này chứa các tài nguyên công khai của ứng dụng.
  - Thư mục `assets` chứa các tài nguyên tài nguyên của ứng dụng, chẳng hạn như tệp CSS, tệp JavaScript và hình ảnh.
  - Tệp `index.php` là tệp đầu vào của ứng dụng.
- **resources**
  - Thư mục này chứa các tài nguyên của ứng dụng.
  - Thư mục `assets` chứa các tài nguyên tài nguyên của ứng dụng, chẳng hạn như tệp CSS, tệp JavaScript và hình ảnh.
  - Thư mục `views` chứa các tệp HTML được hiển thị cho người dùng.
- **routes**
  - Thư mục này chứa các tệp tuyến đường của ứng dụng.
  - Tệp `api.php` chứa các tuyến đường API của ứng dụng.
  - Tệp `web.php` chứa các tuyến đường web của ứng dụng.
- **storage**
  - Thư mục này chứa các dữ liệu lưu trữ của ứng dụng.
  - Thư mục `templates` chứa các tệp mẫu được sử dụng để tạo các tệp HTML.
  - Thư mục `cache` chứa các tệp bộ nhớ đệm được sử dụng để cải thiện hiệu suất của ứng dụng.
  - Thư mục `configs` chứa các tệp cấu hình của ứng dụng.
  - Thư mục `templates_c` chứa các tệp mẫu đã được biên dịch.
- **vendor**
  - Thư mục này chứa các gói PHP được sử dụng bởi ứng dụng.
- **.env**
  - Tệp này chứa các biến môi trường của ứng dụng.
- **.env.example**
  - Tệp này là ví dụ về tệp `.env`.
- **.gitignore**
  - Tệp này chứa các tệp và thư mục sẽ bị bỏ qua bởi Git.
- **.htaccess**
  - Tệp này chứa các cấu hình Apache cho ứng dụng.
- **composer.lock**
  - Tệp này chứa các phiên bản cụ thể của các gói PHP được sử dụng bởi ứng dụng.
- **composer.json**
  - Tệp này chứa các thông tin cấu hình của Composer cho ứng dụng.
- **readme.md**
  - Tệp này chứa tài liệu về ứng dụng.
