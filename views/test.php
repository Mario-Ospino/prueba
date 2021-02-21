<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test DataCRM</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="views/public/js/test.js"></script>

</head>
<body>
    <div class="col-md-2">
    <button onclick="LoadContacts()">CARGAR</button>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
                <td>ID</td>
                <td>CONTACT_NO</td>
                <td>LASTNAME</td>
                <td>CREATETIME</td>
            </tr>
          </thead>
          <tbody id="contactslist"></tbody>
        </table>
    </div>
</body>
</html>