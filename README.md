# Uniber

# discription
Like Uber app for University of Aizu 's student.

# how to use
1. sign up
1. registration you want to ride a car of you want to put in your car.
1. That's all

# APIs

```
want_ride.php
supply_car.php
get_supply_car.php
get_want_ride.php
login.php
register.php
```

# API refarence

### get_supply_cat.php

#### request
```
[]
```

#### responce
```
[
{
    "id" : "supply_car_data_id",
    "uname" : "user_name",
    "res_time" : "送る時間",
    "res_latitude" : "送る緯度",
    "res_longitude" : "送る経度",
    "address" : "住所"
    "comment" : "コメント"
},...
]
```

### get_want_ride.php

#### request
```
[]
```

#### responce
```
[
{
    "id" : "want_ride_data_id",
    "uname" : "user_name",
    "res_time" : "送って欲しい時間",
    "res_latitude" : "送ってほしい緯度",
    "res_longitude" : "送ってほしい経度",
    "address" : "住所",
    "comment" : "コメント"
},...
]
```

### get_users.php

#### request
```
[]
```

#### responce
```
[
{
    "id" : "0000",
    "name": "hogehoge",
    "home_latitude": "135.00",
    "home_longitude": "45",
    "address" : "住所",
    "have_car": "0"
},,...
]
```

### register.php

#### request
```
{
"name": "user name",
"home_latitude" : "135.00",
"home_longitude" : "35.00",
"have_car" : "1"
}
```
#### response
```
{
"result" : "1"
}

0:失敗
1:成功
```

### login.php

#### request
```
{
"name": "user name"
}
```
#### response
```
{
"result" : "1"
}

1:ログイン成功
0:ログイン失敗（ユーザー名またはパスワードが違う、ユーザーが存在しないなど）
```

### want_ride.php

#### request
```
{
  "id": "userid",
  "res_time" : "201710100910",
  "res_latitude" : "135.00",
  "res_longitude" : "35"
}
```
#### response
```
{
"result" : "1"
}

0:失敗
1:成功
```

### supply_car.php

#### request
```
{
    "id": "userid"
    "res_time" : "201710100910",
    "res_latitude" : "135.00",
    "res_longitude" : "35"
}
```
#### response
```
{
"result" : "1"
}

0:失敗
1:成功
```


# Database Structure


`user`  
```
id INTEGER PRIMARY KEY,
name TEXT,
home_latitude REAL,
home_longitude REAL,
have_car INTEGER check(have_car = 1 or have_car = 0)
```

`supply_car`  
```
id INTEGER PRIMARY KEY,
uid INTEGER,
res_time INTEGER,
res_latitude REAL,
res_longitude REAL,
comment TEXT
```

`want_ride`  
```
id INTEGER PRIMARY KEY,
uid INTEGER,
res_time INTEGER,
res_latitude REAL,
res_longitude REAL,
comment TEXT
```


`matching`  
```
id INTEGER PRIMARY KEY,
supply_id INTEGER,
supply_uid INTEGER,
supply_res_time INTEGER,
supply_res_latitude REAL,
supply_res_longitude REAL,
supply_comment TEXT,
want_id INTEGER,
want_uid INTEGER,
want_res_time INTEGER,
want_res_latitude REAL,
want_res_longitude REAL,
want_comment TEXT
```
