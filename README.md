Using the https://symfony.com/doc/6.4/security/expressions.html feature with the `args` feature
```
  #[IsGranted(
        attribute: new Expression('1 === subject'),
        subject: new Expression('args("id")'),
        statusCode: 404)]
```

leads to an exception 
> The function &quot;args&quot; does not exist around position 1 for expression `args(&quot;id&quot;)`

rerproducable via tests
[FooControllerTest.php](tests/Application/FooControllerTest.php)

```
Failed asserting that the Response is successful.
HTTP/1.1 500 Internal Server Error
Cache-Control:          no-cache, private
Content-Type:           text/html; charset=UTF-8
Date:                   Mon, 02 Sep 2024 09:53:45 GMT
Vary:                   Accept
X-Debug-Exception:      The%20function%20%22args%22%20does%20not%20exist%20around%20position%201%20for%20expression%20%60args%28%22id%22%29%60.
X-Debug-Exception-File: %2Fhome%2Ftanders%2FPhpstormProjects%2Fsymfony-is-granted-args-issue%2Fvendor%2Fsymfony%2Fexpression-language%2FParser.php:242
X-Robots-Tag:           noindex

<!-- The function &quot;args&quot; does not exist around position 1 for expression `args(&quot;id&quot;)`. (500 Internal Server Error) -->
```