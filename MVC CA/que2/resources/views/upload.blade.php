<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Student Details</title>
</head>
<body>
    <style> 
    td{
        font-size: larger;
    }
   </style>
    <form method="POST" action="upload" enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name"/></td>
            </tr>
            <tr>
               <td>Register Number</td>
               <td><input type = "number" name = "reg"/></td>
            </tr>
            <tr>
               <td>CGPA</td>
               <td><input type = "number" step="any" name = "cgpa" /></td>
            </tr>
            <tr>
               <td>Specialization</td>
               <td><input type = "text" name = "specialization" /></td>
            </tr>
            <tr>
               <td>File Upload(Resume)</td>
               <td><input type="file" name="file" id="file"> 
                @error('file')
               <div>{{$message}}</div>
               @enderror
            </td>
            </tr>
           
         </table>
        

   

    <button type="submit">Upload</button>
    </form>
</body>
</html>
