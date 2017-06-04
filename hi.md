角色接口
-

### 1. 新增角色接口

#### 接口功能

> 新增角色

#### URL

> http://api.xxx.yyy/v1/role

#### 支持格式

> JSON

#### HTTP请求方式

> POST

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|role_name |true |string|角色名|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |
|data | map |数据 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/role

```
{
    "status": "1",
    "msg": "sucess",
    "data": [
        "role_id": 1
    ],
}
```

### 2. 修改角色接口

#### 接口功能

> 修改角色

#### URL

> http://api.xxx.yyy/v1/role

#### 支持格式

> JSON

#### HTTP请求方式

> PUT

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|role_id |true |int|角色ID|
|role_name |true |string|角色名|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/role

```
{
    "status": "1",
    "msg": "sucess"
}
```

### 3. 删除角色接口

#### 接口功能

> 删除角色

#### URL

> http://api.xxx.yyy/v1/role

#### 支持格式

> JSON

#### HTTP请求方式

> DELETE

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|role_id |true |int|角色ID|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/role

```
{
    "status": "1",
    "msg": "sucess"
}
```
### 4. 查询角色接口

#### 接口功能

> 查询角色，传了id则返回此id的角色，没传则返回角色列表

#### URL

> http://api.xxx.yyy/v1/role

#### 支持格式

> JSON

#### HTTP请求方式

> GET

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|role_id |false |int|角色ID|
|page |false |int|页码|
|pagesize |false |int|每页数量|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |
|data | map |数据 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/role

```
{
    "status": "1",
    "msg": "sucess",
    "data": [
        {
            "role_id": "1",
            "role_name": "超级管理员"
        },
        {
            "role_id": "2",
            "role_name": "交换员"
        }
    ]
}
```

用户角色接口
-----------

### 1. 新增用户角色

#### 接口功能

> 新增用户角色

#### URL

> http://api.xxx.yyy/v1/userRole

#### 支持格式

> JSON

#### HTTP请求方式

> POST

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|user_id |true |int|用户ID|
|role_ids |true |json|角色ID的json串,如"role_ids": [1,2,3]|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|



#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/userRole

```
{
    "status": "1",
    "msg": "sucess"
}
```


### 2. 删除用户角色接口

#### 接口功能

> 删除用户角色

#### URL

> http://api.xxx.yyy/v1/userRole

#### 支持格式

> JSON

#### HTTP请求方式

> DELETE

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|user_id |true |int|用户ID|
|role_ids |true |json|角色ID的json串,如"role_ids": [1,2,3]|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/userRole

```
{
    "status": "1",
    "msg": "sucess"
}
```

### 3. 查询用户角色接口

#### 接口功能

> 查询用户角色

#### URL

> http://api.xxx.yyy/v1/userRole

#### 支持格式

> JSON

#### HTTP请求方式

> GET

#### 请求参数

|参数|必选|类型|说明|
|:----- |:-------|:-----|----- |
|user_id |true |int|用户ID|
|page |false |int|页码|
|pagesize |false |int|每页数量|
|timestamp|true |int|Unix时间戳|
|sign |true |string |客户端签名|

#### 返回字段

|返回字段|字段类型|说明 |
|:----- |:------|:----------------------------- |
|status | int |返回结果状态。0：错误；1：正常 |
|msg | string |返回信息 |
|data | map |数据 |

#### 接口示例

> 地址：http://api.xxx.yyy/v1/userRole

```
{
    "status": "1",
    "msg": "sucess",
    "data": [
        {
            "user_id": "1",
            "role_id": "1",
            "rolename": "文件管理员"
        },
        {
            "user_id": "1",
            "role_id": "2",
            "rolename": "交换员"
        }
    ]
}
```
