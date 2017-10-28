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
login.php
register.php
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
