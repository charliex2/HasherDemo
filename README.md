### Hasher
Hasher是一个测试用的Laravel Package

#### 安装
```
composer require chaliex2/hasher
```
或者在你的composer.json的require中添加
```
    "chaliex2/hasher": "~1.0"
```

#### 配置
在laravel项目中的app/config.php 的providers中添加
```
\Chaliex2\Hasher\MD5HasherProvider:class
```