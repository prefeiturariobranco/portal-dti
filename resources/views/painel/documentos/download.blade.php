<!Doctype html>
<html>
<head>
    <style>
        body,
        embed,
        html {
            height: 100%;
            margin: 0;
            width: 100%;
        }
    </style>
</head>
<title> Arquivo </title>
<body>
<embed src="{{asset('storage/').str_replace("public", "", $doc_ar->caminho)}}" type="application/pdf">
</body>
</html>
