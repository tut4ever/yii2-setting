Yii2 Setting
=========

Chạy migrations
```
yii migrate -p=@vendor/quangthinh/yii2-setting/migrations
```

Thêm quangthinh\yii\setting\Connection như là 1 component của yii2

Với các setting
Tạo model cần thiết kế thừa quangthinh\yii\setting\Model
Các public field sẽ được lưu trữ như là setting key
Để phân biệt các setting model có thể sử dụng section
làm giá trị phân biệt như là prefix

Sử dụng dễ vãi chưởng.

Tạo Model extends quangthinh\yii\setting\Model

khai báo các fields tương ứng với data cần ghi
viết rules nếu cần. Mặc định sử dụng rule string với các fields

Viết form tương tự form thông thường.
Sử dụng $model->update() để cập nhật giá trị

Tại vị trí sử dụng. gọi Yii::$app->setting[$key]. với $key có dạng section#field
Section mặc định sẽ là tên Class
