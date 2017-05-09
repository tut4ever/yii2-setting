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
