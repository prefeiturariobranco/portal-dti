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
<body style="margin: 0">
<embed src="{{asset('storage/documentos/'.$doc_ar->id)}}" type="application/pdf" width="100%" height="100%" style="margin: 0">
</body>
</html>
