<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    <style type="text/css">

        /*

     CSS stylesheet is based on killwing's flavored markdown style:

     https://gist.github.com/2937864

     */

        body{

            margin: 0 auto;

            font: 13px/1.231 Helvetica, Arial, sans-serif;

            color: #444444;

            line-height: 1;

            max-width: 960px;

            padding: 5px;

        }

        h1, h2, h3, h4 {

            color: #111111;

            font-weight: 400;

        }

        h1, h2, h3, h4, h5, p {

            margin-bottom: 16px;

            padding: 0;

        }

        h1 {

            font-size: 28px;

        }

        h2 {

            font-size: 22px;

            margin: 20px 0 6px;

        }

        h3 {

            font-size: 21px;

        }

        h4 {

            font-size: 18px;

        }

        h5 {

            font-size: 16px;

        }

        a {

            color: #0099ff;

            margin: 0;

            padding: 0;

            vertical-align: baseline;

        }

        a:link,a:visited{

            text-decoration:none;

        }

        a:hover{

            text-decoration:underline;

        }

        ul, ol {

            padding: 0;

            margin: 0;

        }

        li {

            line-height: 24px;

            margin-left: 44px;

        }

        li ul, li ul {

            margin-left: 24px;

        }

        ul, ol {

            font-size: 14px;

            line-height: 20px;

            max-width: 540px;

        }



        p {

            font-size: 14px;

            line-height: 20px;

            max-width: 540px;

            margin-top: 3px;

        }



        pre {

            padding: 0px 4px;

            max-width: 800px;

            white-space: pre-wrap;

            font-family: Consolas, Monaco, Andale Mono, monospace;

            line-height: 1.5;

            font-size: 13px;

            border: 1px solid #ddd;

            background-color: #f7f7f7;

            border-radius: 3px;

        }

        code {

            font-family: Consolas, Monaco, Andale Mono, monospace;

            line-height: 1.5;

            font-size: 13px;

            border: 1px solid #ddd;

            background-color: #f7f7f7;

            border-radius: 3px;

        }

        pre code {

            border: 0px;

        }

        aside {

            display: block;

            float: right;

            width: 390px;

        }

        blockquote {

            border-left:.5em solid #40AA53;

            padding: 0 2em;

            margin-left:0;

            max-width: 476px;

        }

        blockquote  cite {

            font-size:14px;

            line-height:20px;

            color:#bfbfbf;

        }

        blockquote cite:before {

            content: '\2014 \00A0';

        }



        blockquote p {

            color: #666;

            max-width: 460px;

        }

        hr {

            height: 1px;

            border: none;

            border-top: 1px dashed #0066CC

        }



        button,

        input,

        select,

        textarea {

            font-size: 100%;

            margin: 0;

            vertical-align: baseline;

            *vertical-align: middle;

        }

        button, input {

            line-height: normal;

            *overflow: visible;

        }

        button::-moz-focus-inner, input::-moz-focus-inner {

            border: 0;

            padding: 0;

        }

        button,

        input[type="button"],

        input[type="reset"],

        input[type="submit"] {

            cursor: pointer;

            -webkit-appearance: button;

        }

        input[type=checkbox], input[type=radio] {

            cursor: pointer;

        }

        /* override default chrome & firefox settings */

        input:not([type="image"]), textarea {

            -webkit-box-sizing: content-box;

            -moz-box-sizing: content-box;

            box-sizing: content-box;

        }



        input[type="search"] {

            -webkit-appearance: textfield;

            -webkit-box-sizing: content-box;

            -moz-box-sizing: content-box;

            box-sizing: content-box;

        }

        input[type="search"]::-webkit-search-decoration {

            -webkit-appearance: none;

        }

        label,

        input,

        select,

        textarea {

            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

            font-size: 13px;

            font-weight: normal;

            line-height: normal;

            margin-bottom: 18px;

        }

        input[type=checkbox], input[type=radio] {

            cursor: pointer;

            margin-bottom: 0;

        }

        input[type=text],

        input[type=password],

        textarea,

        select {

            display: inline-block;

            width: 210px;

            padding: 4px;

            font-size: 13px;

            font-weight: normal;

            line-height: 18px;

            height: 18px;

            color: #808080;

            border: 1px solid #ccc;

            -webkit-border-radius: 3px;

            -moz-border-radius: 3px;

            border-radius: 3px;

        }

        select, input[type=file] {

            height: 27px;

            line-height: 27px;

        }

        textarea {

            height: auto;

        }



        /* grey out placeholders */

        :-moz-placeholder {

            color: #bfbfbf;

        }

        ::-webkit-input-placeholder {

            color: #bfbfbf;

        }



        input[type=text],

        input[type=password],

        select,

        textarea {

            -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;

            -moz-transition: border linear 0.2s, box-shadow linear 0.2s;

            transition: border linear 0.2s, box-shadow linear 0.2s;

            -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);

            -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);

            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);

        }

        input[type=text]:focus, input[type=password]:focus, textarea:focus {

            outline: none;

            border-color: rgba(82, 168, 236, 0.8);

            -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);

            -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);

            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 0 8px rgba(82, 168, 236, 0.6);

        }



        /* buttons */

        button {

            display: inline-block;

            padding: 4px 14px;

            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

            font-size: 13px;

            line-height: 18px;

            -webkit-border-radius: 4px;

            -moz-border-radius: 4px;

            border-radius: 4px;

            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);

            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);

            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);

            background-color: #0064cd;

            background-repeat: repeat-x;

            background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));

            background-image: -moz-linear-gradient(top, #049cdb, #0064cd);

            background-image: -ms-linear-gradient(top, #049cdb, #0064cd);

            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));

            background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);

            background-image: -o-linear-gradient(top, #049cdb, #0064cd);

            background-image: linear-gradient(top, #049cdb, #0064cd);

            color: #fff;

            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);

            border: 1px solid #004b9a;

            border-bottom-color: #003f81;

            -webkit-transition: 0.1s linear all;

            -moz-transition: 0.1s linear all;

            transition: 0.1s linear all;

            border-color: #0064cd #0064cd #003f81;

            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);

        }

        button:hover {

            color: #fff;

            background-position: 0 -15px;

            text-decoration: none;

        }

        button:active {

            -webkit-box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);

            -moz-box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);

            box-shadow: inset 0 3px 7px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);

        }

        button::-moz-focus-inner {

            padding: 0;

            border: 0;

        }

        /* table  */

        table {

            border-spacing: 0;

            border: 1px solid #ccc;

            border-right: 0px;

            border-bottom: 0px;

        }

        td, th{

            border-bottom: 1px solid #ccc;

            border-right: 1px solid #ccc;

            padding: 10px;

        }

        table th,table tr:nth-of-type(2n) {

            background-color: #f9faff;

        }



        /* code syntax highlight.

        Documentation: http://www.mdcharm.com/documentation/code_syntax_highlighting.html#custom_your_own

         */

        pre .literal,

        pre .comment,

        pre .template_comment,

        pre .diff .header,

        pre .javadoc {

            color: #008000;

        }



        pre .keyword,

        pre .css .rule .keyword,

        pre .winutils,

        pre .javascript .title,

        pre .nginx .title,

        pre .subst,

        pre .request,

        pre .status {

            color: #0000FF;

            font-weight: bold

        }



        pre .number,

        pre .hexcolor,

        pre .python .decorator,

        pre .ruby .constant {

            color: #0000FF;

        }



        pre .string,

        pre .tag .value,

        pre .phpdoc,

        pre .tex .formula {

            color: #D14

        }



        pre .title,

        pre .id {

            color: #900;

            font-weight: bold

        }



        pre .javascript .title,

        pre .lisp .title,

        pre .clojure .title,

        pre .subst {

            font-weight: normal

        }



        pre .class .title,

        pre .haskell .type,

        pre .vhdl .literal,

        pre .tex .command {

            color: #458;

            font-weight: bold

        }



        pre .tag,

        pre .tag .title,

        pre .rules .property,

        pre .django .tag .keyword {

            color: #000080;

            font-weight: normal

        }



        pre .attribute,

        pre .variable,

        pre .lisp .body {

            color: #008080

        }



        pre .regexp {

            color: #009926

        }



        pre .class {

            color: #458;

            font-weight: bold

        }



        pre .symbol,

        pre .ruby .symbol .string,

        pre .lisp .keyword,

        pre .tex .special,

        pre .prompt {

            color: #990073

        }



        pre .built_in,

        pre .lisp .title,

        pre .clojure .built_in {

            color: #0086b3

        }



        pre .preprocessor,

        pre .pi,

        pre .doctype,

        pre .shebang,

        pre .cdata {

            color: #999;

            font-weight: bold

        }



        pre .deletion {

            background: #fdd

        }



        pre .addition {

            background: #dfd

        }



        pre .diff .change {

            background: #0086b3

        }



        pre .chunk {

            color: #aaa

        }



        pre .markdown .header {

            color: #800;

            font-weight: bold;

        }



        pre .markdown .blockquote {

            color: #888;

        }



        pre .markdown .link_label {

            color: #88F;

        }



        pre .markdown .strong {

            font-weight: bold;

        }



        pre .markdown .emphasis {

            font-style: italic;

        }

    </style>





</head>

<body>

<h2>登录认证接口</h2>

<h3>1.统一登录入口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>统一登录入口</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/login">http://api.xxx.yyy/v1/login</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">redirect_uri</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>登录成功后返回的地址(302跳转)</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<p>一级域名下设置一个token=xxxxxx的cookie</p>

<h3>2.认证cookie信息</h3>

<h4>接口功能</h4>

<blockquote>
    <p>认证cookie信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/auth">http://api.xxx.yyy/v1/auth</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">token</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>cookie令牌</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"创建权限点成功",
    "data": {
        "user_id" : 666
        "username": "Google",
        "username_cn": "</span>谷歌",
        <span class="string">"depart_node_id": "3",
        "email_address": "google@gmail.com",
        "mobile_phone_number": "</span>123456",
        "im_account": "google@gmail.com"
    }
}
</span></code></pre>

<h3>3.登出接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>统一登出</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/logout">http://api.xxx.yyy/v1/logout</a></p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h2>用户接口</h2>

<h3>1. 新增用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增用户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/createUser">http://api.xxx.yyy/v1/UserRightManagement/createUser</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名</td>
    </tr>
    <tr>
        <td align="left">userpin</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户码</td>
    </tr>
    <tr>
        <td align="left">username_cn</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>中文名</td>
    </tr>
    <tr>
        <td align="left">passwd</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>密码</td>
    </tr>
    <tr>
        <td align="left">depart_node_id</td>
        <td align="left">ture</td>
        <td align="left">int</td>
        <td>部门</td>
    </tr>
    <tr>
        <td align="left">master_id</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>主账户Id</td>
    </tr>
    <tr>
        <td align="left">email_address</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>邮箱</td>
    </tr>
    <tr>
        <td align="left">mobile_phone_number</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>电话</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">    {<span class="attribute">
    "status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"创建用户成功"</span>,
    "data": {
        "user_id":1
     }
    }
</span></code></pre>

<h3>2. 更新用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>更新用户信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/updateUserInfo">http://api.xxx.yyy/v1/UserRightManagement/updateUserInfo</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">username_cn</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>中文名</td>
    </tr>
    <tr>
        <td align="left">passwd</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>密码</td>
    </tr>
    <tr>
        <td align="left">depart_node_id</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>部门</td>
    </tr>
    <tr>
        <td align="left">email_address</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>邮箱</td>
    </tr>
    <tr>
        <td align="left">mobile_phone_number</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>电话</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"更新用户信息成功",
"data": ""
}
</span></span></code></pre>

<h3>3. 删除用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除用户信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteUser">http://api.xxx.yyy/v1/UserRightManagement/deleteUser</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除用户信息成功",
"data": ""
}
</span></span></code></pre>

<h3>4. 查询用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询用户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/getUser">http://api.xxx.yyy/v1/UserRightManagement/getUser</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"查询用户信息成功"</span>,
    "data": [
        {
            "user_id": 1,
            "username": "Google",
            "username_cn": "谷歌",
            <span class="string">"depart_node_id"</span>: "3",
            "email_address<span class="string">": "google@gmail.com",
            "</span>mobile_phone_number": "1<span class="number">2</span>3456",
            "im_account<span class="string">": "google@gmail.com"
        },
        {
            "user_id": 2,
            "</span>username": "baidu",
            "username_cn": "百度",
            "depart_node_id": "31",
            "email_address": "baidu@gmail.com",
            <span class="string">"mobile_phone_number": "123456",
            "im_account": "baidu@gmail.com"
        }
    ]
}
</span></span></code></pre>

<h2>用户组接口</h2>

<h3>1. 新增用户组接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增用户组</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/createUserGroup">http://api.xxx.yyy/v1/UserRightManagement/createUserGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">name</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>角色名称</td>
    </tr>
    <tr>
        <td align="left">description</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>角色描述(最多允许512个中英文字符)</td>
    </tr>
    <tr>
        <td align="left">permission_id_list</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>角色具备的权限ID列表(各个权限ID之间以逗号分隔)</td>
    </tr>
    <tr>
        <td align="left">use_senario</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>使用场景</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"创建角色成功"</span>,
"data": {
    "group_id":1
 }
}
</span></code></pre>

<h3>2. 添加用户组中用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>向用户组中添加用户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/addUserToGroup">http://api.xxx.yyy/v1/UserRightManagement/addUserToGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"添加用户到用户组成功",
"data": {
    "group_id":1
 }
}
</span></span></code></pre>

<h3>3. 删除用户组中用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除用户组中用户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteUserToGroup">http://api.xxx.yyy/v1/UserRightManagement/deleteUserToGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除用户组中用户成功",
"data": ""
}
</span></span></code></pre>

<h3>4. 删除用户组接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除用户组</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteUserGroup">http://api.xxx.yyy/v1/UserRightManagement/deleteUserGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除用户组成功",
"data": ""
}
</span></span></code></pre>

<h3>5. 更新用户组信息接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>更新用户组信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/updateUserGroup">http://api.xxx.yyy/v1/UserRightManagement/updateUserGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">name</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>角色名称</td>
    </tr>
    <tr>
        <td align="left">description</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>角色描述(最多允许512个中英文字符)</td>
    </tr>
    <tr>
        <td align="left">status</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>角色状态(1:&quot;启用&quot;, 2:&quot;停用&quot; 3:&quot;废弃&quot; 4:&quot;其它&quot; ...)</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"更新用户组信息成功",
"data": ""
}
</span></span></code></pre>

<h3>6. 获取用户组接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询用户组</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/fetchUserGroup">http://api.xxx.yyy/v1/UserRightManagement/fetchUserGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"查询用户组信息成功",
    "data": [
        {
            "name": "用户组1",
            "description": "谷歌",
            "status": 1,
            "</span>permission_id_list": "1,2,3"
        },
        {
            "username": "baidu",
            "description<span class="string">": "百度",
            "status": 2,
            "permission_id_list": "4,5,6"
        }
    ]
}
</span></span></code></pre>

<h3>7. 获取用户组中用户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询用户组中的所有用户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/fetchUserFromGroup">http://api.xxx.yyy/v1/UserRightManagement/fetchUserFromGroup</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">group_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户组Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"查询用户组中用户信息成功",
    "data": [
        {
            "user_id": 1,
            "username": "Google",
            "username_cn": "谷歌",
            "depart_node_id": "3",
            "email_address": "google@gmail.com",
            "mobile_phone_number": "123456",
            "im_account": "google@gmail.com"
        },
        {
            "user_id": 2,
            "username": "baidu",
            "username_cn": "百度",
            "depart_node_id": "</span>31<span class="string">",
            "email_address": "baidu@gmail.com",
            "</span>mobile_phone_number": "<span class="number">1</span>23<span class="number">4</span>56",
            "im_account": "baidu@gmail.com"
        }
    ]
}
</span></code></pre>

<h2>主子账户接口</h2>

<h3>1. 添加用户的主账户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>向指定用户添加主账户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/createMasterUser">http://api.xxx.yyy/v1/UserRightManagement/createMasterUser</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">master_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>主账户Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"添加主账户成功",
"data": ""
}
</span></span></code></pre>

<h3>2. 删除指定用户的主账户接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除指定用户的主账户</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteUserGroup">http://api.xxx.yyy/v1/UserRightManagement/deleteMasterUser</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">username/userpin/user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户名，userpin或用户Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除指定用户的主账户成功",
"data": ""
}
</span></span></code></pre>

<h2>组织结构接口</h2>

<h3>1. 新增组织节点接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增组织节点</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/createOrgNode">http://api.xxx.yyy/v1/UserRightManagement/createOrgNode</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">parent_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>父节点Id</td>
    </tr>
    <tr>
        <td align="left">deep</td>
        <td align="left">ture</td>
        <td align="left">int</td>
        <td>节点深度</td>
    </tr>
    <tr>
        <td align="left">name_en</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>节点英文名</td>
    </tr>
    <tr>
        <td align="left">name_cn</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>节点中文名</td>
    </tr>
    <tr>
        <td align="left">gene</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>节点完整基因链路径(各级节点ID直接以/分割)</td>
    </tr>
    <tr>
        <td align="left">is_childnode_mounted</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>是否有子节点挂载(0表示没有, 1表示有)</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"创建组织结构节点成功",
"data": {
    "org_id":1
 }
}
</span></span></code></pre>

<h3>2. 更新组织结构接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>更新组织结构信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/updateOrgNode">http://api.xxx.yyy/v1/UserRightManagement/updateOrgNode</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">org_id</td>
        <td align="left">ture</td>
        <td align="left">int</td>
        <td>组织结构Id</td>
    </tr>
    <tr>
        <td align="left">parent_id</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>父节点Id</td>
    </tr>
    <tr>
        <td align="left">deep</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>节点深度</td>
    </tr>
    <tr>
        <td align="left">name_en</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>节点英文名</td>
    </tr>
    <tr>
        <td align="left">name_cn</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>节点中文名</td>
    </tr>
    <tr>
        <td align="left">gene</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>节点完整基因链路径(各级节点ID直接以/分割)</td>
    </tr>
    <tr>
        <td align="left">is_childnode_mounted</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>是否有子节点挂载(0表示没有, 1表示有)</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"更新组织结构信息成功",
"data": "</span><span class="string">"
}
</span></span></code></pre>

<h3>3. 删除组织结构接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除组织结构信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteOrgNode">http://api.xxx.yyy/v1/UserRightManagement/deleteOrgNode</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">org_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>组织结构Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除组织结构信息成功",
"data": "</span><span class="string">"
}
</span></span></code></pre>

<h3>4. 查询组织结构接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询组织结构信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/getOrgNode">http://api.xxx.yyy/v1/UserRightManagement/getOrgNode</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">org_id</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>组织结构Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"查询组织结构信息成功",
    "data": [
        {
            "parent_id": 0,
            "deep": 1,
            "</span>name_en": "google",
            "name_cn": "谷歌<span class="string">",
            "gene": "0/",
            "node_status": 1,
            "is_childnode_mounted"</span>: 1
        }
    ]
}
</span></code></pre>

<h2>角色接口</h2>

<h3>1. 新增角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_name</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>角色名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">数据</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;,
    &quot;data&quot;: [
        &quot;role_id&quot;: 1
    ],
}
</code></pre>

<h3>2. 修改角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>修改角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>角色ID</td>
    </tr>
    <tr>
        <td align="left">role_name</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>角色名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;
}
</code></pre>

<h3>3. 删除角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>DELETE</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>角色ID</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;
}
</code></pre>

<h3>4. 查询角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询角色，传了id则返回此id的角色，没传则返回角色列表</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>角色ID</td>
    </tr>
    <tr>
        <td align="left">page</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>页码</td>
    </tr>
    <tr>
        <td align="left">pagesize</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>每页数量</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">数据</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/role">http://api.xxx.yyy/v1/role</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;,
    &quot;data&quot;: [
        {
            &quot;role_id&quot;: &quot;1&quot;,
            &quot;role_name&quot;: &quot;超级管理员&quot;
        },
        {
            &quot;role_id&quot;: &quot;2&quot;,
            &quot;role_name&quot;: &quot;交换员&quot;
        }
    ]
}
</code></pre>

<h2>用户角色接口</h2>

<h3>1. 新增用户角色</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增用户角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">user_id</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>用户ID</td>
    </tr>
    <tr>
        <td align="left">role_ids</td>
        <td align="left">true</td>
        <td align="left">json</td>
        <td>角色ID的json串,如&quot;role_ids&quot;: [1,2,3]</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;
}
</code></pre>

<h3>2. 删除用户角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除用户角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>DELETE</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">user_id</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>用户ID</td>
    </tr>
    <tr>
        <td align="left">role_ids</td>
        <td align="left">true</td>
        <td align="left">json</td>
        <td>角色ID的json串,如&quot;role_ids&quot;: [1,2,3]</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;
}
</code></pre>

<h3>3. 查询用户角色接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询用户角色</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">user_id</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>用户ID</td>
    </tr>
    <tr>
        <td align="left">page</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>页码</td>
    </tr>
    <tr>
        <td align="left">pagesize</td>
        <td align="left">false</td>
        <td align="left">int</td>
        <td>每页数量</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">数据</td>
    </tr>
    </tbody></table>

<h4>接口示例</h4>

<blockquote>
    <p>地址：<a href="http://api.xxx.yyy/v1/userRole">http://api.xxx.yyy/v1/userRole</a></p>
</blockquote>

<pre><code>{
    &quot;status&quot;: &quot;1&quot;,
    &quot;msg&quot;: &quot;sucess&quot;,
    &quot;data&quot;: [
        {
            &quot;user_id&quot;: &quot;1&quot;,
            &quot;role_id&quot;: &quot;1&quot;,
            &quot;rolename&quot;: &quot;文件管理员&quot;
        },
        {
            &quot;user_id&quot;: &quot;1&quot;,
            &quot;role_id&quot;: &quot;2&quot;,
            &quot;rolename&quot;: &quot;交换员&quot;
        }
    ]
}
</code></pre>

<h2>权限接口</h2>

<h3>1.新增权限点</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增权限点</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/permission">http://api.xxx.yyy/v1/permission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">permission_name</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"创建权限点成功",
    "data": {
        "</span>permission_id<span class="string">" : 123
    }
}
</span></span></code></pre>

<h3>2.删除权限点</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除权限点</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/permission">http://api.xxx.yyy/v1/permission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>DELETE</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">permission_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"删除权限点成功",
    "</span>data": []
}
</span></code></pre>

<h3>3.修改权限点</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除权限点</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/permission">http://api.xxx.yyy/v1/permission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">permission_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">permission_name</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"修改权限点成功",
    "</span>data": []
}
</span></code></pre>

<h3>4.查询权限点</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询权限点</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/permission">http://api.xxx.yyy/v1/permission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">permission_id</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"获取权限点成功",
    "data": [
    {
        "</span>permission_id" : 1,
        "permission_name<span class="string">" : 创建任务,
    },
    {
        "permission_id" : 2,
        "permission_name"</span> : 查看任务,
    },
    ]
}
</span></code></pre>

<h3>5.赋予角色权限</h3>

<h4>接口功能</h4>

<blockquote>
    <p>赋予角色权限</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/rolePermission">http://api.xxx.yyy/v1/rolePermission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">permission_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"赋予角色权限成功",
    "data": []
}
</span></span></code></pre>

<h3>6.删除角色权限</h3>

<h4>接口功能</h4>

<blockquote>
    <p>赋予角色权限</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/rolePermission">http://api.xxx.yyy/v1/rolePermission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>DELETE</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">permission_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"删除角色权限"</span>,
    "data": []
}
</span></code></pre>

<h3>7.获取角色权限</h3>

<h4>接口功能</h4>

<blockquote>
    <p>赋予角色权限</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/v1/rolePermission">http://api.xxx.yyy/v1/rolePermission</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">role_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>权限名</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">map</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"获取权限点成功",
    "data"</span>: [
        {
            <span class="attribute">"permission_id" : 1,
            "permission_name" : 创建任务,
        },
        {
            "permission_id" : 2,
            "permission_name" : 查看任务,
        },
    ]
}
</span></span></span></code></pre>

<h2>用户Access Key接口</h2>

<h3>1. 新增用户AccessKey接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>新增用户Access Key</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/createUserAccessKey">http://api.xxx.yyy/v1/UserRightManagement/createUserAccessKey</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>POST</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">user_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户Id</td>
    </tr>
    <tr>
        <td align="left">key_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>Access Key ID</td>
    </tr>
    <tr>
        <td align="left">key_secret</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>Access Key Secret</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">    {<span class="attribute">
    "status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"创建用户Access Key成功"</span>,
    "data": {
        "key_id":1
     }
    }
</span></code></pre>

<h3>2. 更新用户Access Key接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>更新用户Access Key</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/updateUserInfo">http://api.xxx.yyy/v1/UserRightManagement/updateUserAccessKey</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>PUT</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">key_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户Access key Id</td>
    </tr>
    <tr>
        <td align="left">status</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>Access Key 状态</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"更新用户Access Key成功"</span>,
"data": ""
}
</span></code></pre>

<h3>3. 删除用户Access Key接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>删除用户AccessKey信息</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/deleteUser">http://api.xxx.yyy/v1/UserRightManagement/deleteUserAccessKey</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>delete</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">key_id</td>
        <td align="left">ture</td>
        <td align="left">string</td>
        <td>用户Access key Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
"status</span>": <span class="value"><span class="number">0</span></span>,<span class="attribute">
"msg</span>": <span class="value"><span class="string">"删除用户信息成功",
"data": ""
}
</span></span></code></pre>

<h3>4. 查询用户Access key 接口</h3>

<h4>接口功能</h4>

<blockquote>
    <p>查询用户Access Key</p>
</blockquote>

<h4>URL</h4>

<blockquote>
    <p><a href="http://api.xxx.yyy/UserRightManagement/getUser">http://api.xxx.yyy/v1/UserRightManagement/deleteUserAccessKey</a></p>
</blockquote>

<h4>支持格式</h4>

<blockquote>
    <p>JSON</p>
</blockquote>

<h4>HTTP请求方式</h4>

<blockquote>
    <p>GET</p>
</blockquote>

<h4>请求参数</h4>

<table><thead>
    <tr>
        <th align="left">参数</th>
        <th align="left">必选</th>
        <th align="left">类型</th>
        <th>说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">user_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>用户Id</td>
    </tr>
    <tr>
        <td align="left">key_id</td>
        <td align="left">false</td>
        <td align="left">string</td>
        <td>用户Access key Id</td>
    </tr>
    <tr>
        <td align="left">app_id</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>应用id(系统预先分配)</td>
    </tr>
    <tr>
        <td align="left">sign</td>
        <td align="left">true</td>
        <td align="left">string</td>
        <td>客户端签名</td>
    </tr>
    <tr>
        <td align="left">timestamp</td>
        <td align="left">true</td>
        <td align="left">int</td>
        <td>Unix时间戳</td>
    </tr>
    </tbody></table>

<h4>返回字段</h4>

<table><thead>
    <tr>
        <th align="left">返回字段</th>
        <th align="left">字段类型</th>
        <th align="left">说明</th>
    </tr>
    </thead><tbody>
    <tr>
        <td align="left">status</td>
        <td align="left">int</td>
        <td align="left">返回结果状态。0：错误；1：正常</td>
    </tr>
    <tr>
        <td align="left">msg</td>
        <td align="left">string</td>
        <td align="left">返回信息</td>
    </tr>
    <tr>
        <td align="left">data</td>
        <td align="left">string</td>
        <td align="left">返回数据</td>
    </tr>
    </tbody></table>

<h4>返回值示例</h4>

<pre><code class="json">{<span class="attribute">
    "status</span>": <span class="value"><span class="string">"1"</span></span>,<span class="attribute">
    "msg</span>": <span class="value"><span class="string">"查询用户Access key信息成功"</span>,
    "data": [
        {
            "id": 1,
            "access_key_id": "EDAA87C80FC914C9DE94619E00D6DB6D",
            "access_key_secret": "8AE1ABA7C73157D5FEA5489D975683C<span class="number">7</span>",
            "status": 1,
            <span class="string">"created_time": "</span>20170602<span class="number">1</span>01010"
        }
    ]
}
</span></code></pre>


</body>

</html>