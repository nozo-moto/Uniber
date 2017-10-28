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
"success" : "1"
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
