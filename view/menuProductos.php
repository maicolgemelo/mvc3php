<?php require_once 'header.php'; ?>


        <h1>Menú productos</h1>
        <br>
        
        <form name="form1" method="POST" action="./?accion=guardarProductos">
            <p>Categoria: 
                <select name="selcategorias">
                    <option value="<?php echo $dato['id']; ?>">Seleccion...</option>
                    <?php foreach($consultaCategorias as $dato): ?>
                    <option value="<?php echo $dato['id']; ?>"><?php echo $dato['nombre']; ?></option>
                    <?php endforeach; ?>
                </select>

            </p>
            <p>Nombre producto: <input type="text" name="txtnombre"></p>
            <p>Precio: <input type="text" name="txtprecio"></p>
            <p><input type="submit" name="btnguardarproducto" value="Guardar Producto"></p>
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <TH>Categoria</TH>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultaProductos as $dato): ?>
                <tr>
                    <td><?php echo $dato['id']; ?></td>
                    <td><?php echo $dato['categoria']; ?></td>
                    <td><?php echo $dato['nombre']; ?></td>
                    <td><?php echo $dato['precio']; ?></td>
                    <td><a href="./?accion=modificarProducto&id=<?php echo $dato['id']; ?>">Modificar</a></td>
                    <td><a href="./?accion=eliminarProducto&id=<?php echo $dato['id']; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       

        <br>
        <br>
        <br>

        <a href="./">volver</a>
<?php require_once 'footer.php'; ?>
   