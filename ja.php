<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "[URL]http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd[/URL]">
<html xmlns="[URL]http://www.w3.org/1999/xhtml[/URL]">
    <head>
        <title></title>
        <script type="text/javascript">
    function calcTotal(oForm){
        var sum = 0;
        for(i=0; i < oSels.length; i++){
            sum += new Number(oSels[i].value);
        }
        document.getElementById('result').innerHTML = sum;
        return false;
    }
    window.onload=function(){
        oSels = document.getElementById('form1').getElementsByTagName('select');
        for(i=0; i < oSels.length; i++){
            oSels[i].onchange=function(){
                document.getElementById('result').innerHTML = result;

            }
        }
    }
    </script>
    </head>
    <body>
        <form id="form1" action="" method="get" onkeyup="return calcTotal(this)">
            <select name=select1>
                <option selected="selected" value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br />
            <select name=select2>
                <option selected="selected" value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br />
            <input name="" type="submit" value="Total" />
            <span>Total: </span><span id="result"></span>
            <span>El resultado es: </span> <span id="result"></span>
        </form>

    </body>
</html>
