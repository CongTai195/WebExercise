<!DOCTYPE html>
<html>
<head>
 <title>
    FirstBlog
    </title>
    <style>
        html{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Handlee', cursive;
            font-size: 13pt;
            background-color: pink;
            padding: 10px;
            margin: 0;
        }
        h1{
            font-size: 15pt;
            color: #20bcd5;
            text-align: center;
            padding: 18px 0 18px 0;
            margin: 0 0 10px 0;
        }
        h1 span{
            border: 4px dashed #20bcd5;
            padding: 10px;
        }
        p{
            padding: 0;
            margin: 0;
        }
        .section{
            overflow: hidden;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        table{
            width: 75%;
            font-size: 15pt;
        }
        table, th, td{
            border: 2px solid #cecece;
            border-collapse:collapse;
            text-align: left;
            table-layout: fixed;
            padding: 10px;
        }tbody tr:nth-child(odd) {
             background-color: #f2f2f2;
        }
        .selected{
            text-align: center;
            background-color: #f36f48;
            font-weight: bold;
            color: white;
        }
        form{
            text-align: center;
            margin-top: 0;
        }           
    </style>
    </head>
    <body>
        <div class = "section">
            <p>Dinh Cong Tai</p>
        </div>
        <div class="section">
            <h1><span>About Me</span></h1>
            <table>
                <tr>
                    <td class="selected">Full Name</td>
                    <td class="">Dinh Cong Tai</td>
                </tr>
                <tr>
                    <td class="selected">Date of Birth</td>
                    <td class="">19/05/2000</td>
                </tr>
                <tr>
                    <td class="selected">Hometown</td>
                    <td class="">Da Nang, Viet Nam</td>
                </tr>
                <tr>
                    <td class="selected">Education</td>
                    <td class="">Da Nang University of Science and Technology</td>
                </tr>
                <tr>
                    <td class="selected">Phone</td>
                    <td class="">0945501905</td>
                </tr>
                <tr>
                    <td class="selected">Email</td>
                    <td class="">braddinh1952000@gmail.com</td>
                </tr>
            </table>
        </div>
    </body>
</html>