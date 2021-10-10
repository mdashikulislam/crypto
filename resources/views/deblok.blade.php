<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body><h1>MERCI DE RENTRER L'ADRESSE MAIL DU NOUVEAU MEMBRE PUIS DE LE PASSER EN ETAPE "FORMATION A FAIRE"</h1>
<form id="form1" name="form1" method="post" action="{{route('deblok')}}">
    @csrf
    <table border=1>
        <tr>
            <td width="30"><span>Adresse mail</span></td>
            <td width="30"><input type="text" name="fn" id="fn" /></td>
        </tr>
        <tr>
            <td width="30"><span>Prenom</span></td>
            <td width="30"><input type="text" name="prenom" id="prenom" /></td>
        </tr>

        <tr><td></td>
            <div align="center">
                <td><input type="submit" name="Submit" id="Submit" value="Submit" />
                    <input type="reset" name="Reset" id="button" value="Reset" />
                </td>
            </div>
        </tr>
    </table>
</form>
</body>
</html>
