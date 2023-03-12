
- Khi truyền dữ liệu dạng json bằng fetch thì chuyển
  Content-Type: application/x-www-form-urlencoded và phần
  body khởi tạo một đối tượng URLSearchParams:
  body: new URLSearchParams(data)

- Ngoài ra có thể dùng:

```php
  $_POST = json_decode(file_get_contents('php://input'), true);
```

với mọi phương thức đều dùng được

------------- Cấu hình của 1 api -------------

```php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
                                          Access-Control-Allow-Credentials,
                                          Content-Type,
                                          Access-Control-Allow-Methods,
                                          Authorization,
                                          X-Requested-With');
```
