SELECT stock.id_stock ,stock.id_articulo, articulo.nombre, tipoart.tipoArti, articulo.precio_inicial,articulo.precio_final,\n
         stock.cantidad, stock.stockMinimo, proveedor.nombre as proveedor, \n
         (stock.cantidad-stock.stockMinimo) as diferencia\n
        FROM articulo INNER JOIN tipoart ON articulo.id_tipo=tipoart.id_tipoArt\n
     INNER JOIN stock ON stock.id_articulo=articulo.id_articulo \n
     INNER JOIN proveedor ON proveedor.id_proveedor=stock.id_stock\n
    ORDER BY diferencia ASC