

<div  style="width: 20%; float:right">
     <div ><td><h5 class="is-size-4">calcular Precio:</h5> </td>
        <div class="field"> 
            <table>
            <tr>
                <td><h5 class="is-size-6">Precio Inicial:</h5> </td>
                <td><h5 class="is-size-6">%:</h5> </td>  
            </td>
            </tr>
            <tr>
                <td><h5 class="is-size-6"><input type="text"  size="15px"  id="precio"></h5> </td>
                <td><h5 class="is-size-6"><input type="text"  size="5px"  id="porcentaje"></h5> </td>  
            </td>
            </tr>
            <tr>
                <td ><h5 class="is-size-6"><input type="text"  size="15px"  id="preciof" placeholder="Prefio Final"></h5> </td>
                <td ><input type="button" onclick="Sumar()" name="suma" value="Calcular"></td>
            </td>
            </tr>


            </table>
        </div>
        
        








   


        <script type="text/javascript">
            function Sumar(){
            var precio=Number(document.getElementById('precio').value);
            var porcentaje=Number(document.getElementById('porcentaje').value);

            var result=precio*porcentaje/100+precio;

            document.getElementById('preciof').value=result;

            }
        </script>
    </div>
</div>