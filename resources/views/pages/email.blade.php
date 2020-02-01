<html>
<head>
  <style>
      table,td{
          border:1px solid #ccc;
      }
      td{
          padding:6px;
      }
  </style>
</head>
<body>
<h3>Contact form</h3>
<table align="center" width="80%" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td> Name : </td>
  <td> {{$name}} </td>
</tr>

<tr>
  <td> phone : </td>
  <td> {{$phone}} </td>
</tr>


<tr>
  <td> Email : </td>
  <td> {{$email}} </td>
</tr>
<tr>
  <td> Massage : </td>
  <td> {{$msg}} </td>
</tr>
</table>
</body>
</html>
