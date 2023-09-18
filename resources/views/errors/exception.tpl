<!DOCTYPE html>
<html lang="en">

<head>
  <title>Error Handler</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    #main {
      border: 1px solid #e03131;
      background-color: #fff5f5;
      color: #000000;
      padding: 20px;
      border-radius: 12px;
    }

    summary {
      cursor: pointer;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
  </style>
</head>

<body>
  <main id="main">
    <div><b>Error Message:</b> {$message}</div>
    <div><b>Error Code:</b> {$code}</div>
    <div><b>File Error:</b> {$file}({$line})</div>
    <hr>
    <details>
      <summary><b>Trace:</b></summary>
      <div>{$strace_as_string}</div>
    </details>
  </main>
</body>

</html>