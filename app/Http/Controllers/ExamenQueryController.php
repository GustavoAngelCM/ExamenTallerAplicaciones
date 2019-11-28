<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categoria;
use App\Producto;
use App\Proveedor;
use App\HistorialEntrega;
use App\HistorialVenta;
use App\Venta;
use App\Compra;
use App\Cliente;
use App\Direccion;
use App\Almacen;

class ExamenQueryController extends Controller
{
    public function ProductoPorCategoria()
    {
      $data = Categoria::join('productos', 'categorias.idCategoria', '=', 'productos.categoria_id')
                ->select('categorias.nombreCategoria', 'productos.nombreProducto')
                ->get();
      return response()->json($data);
    }

    public function ClientePorProducto($cliente)
    {
      $data = Producto::join('historial_ventas', 'productos.idProducto', '=', 'historial_ventas.producto_id')
                ->join('ventas', 'historial_ventas.venta_id', '=', 'ventas.idVenta')
                ->join('compras', 'ventas.idVenta', '=', 'compras.venta_id')
                ->join('clientes', 'compras.cliente_id', '=', 'clientes.idCliente')
                ->where('clientes.nombreRazon', $cliente)
                ->select(
                    'productos.nombreProducto as Nombre de producto',
                    'productos.precio as Precio unitario',
                    'historial_ventas.cantidad as Cantidad',
                    'historial_ventas.subTotal as Precio subTotal',
                    'ventas.fechaVenta as Fecha venta',
                    'compras.factura as Numero de factura',
                    'clientes.nitCi as CI de comprador'
                  )
                ->get();
      return response()->json($data);
    }

    public function ProveePorProducto($proveedor)
    {
      $data = Proveedor::join('historial_entregas', 'proveedors.idProveedor', '=', 'historial_entregas.proveedor_id')
                ->join('productos', 'historial_entregas.producto_id', '=', 'productos.idProducto')
                ->where('proveedors.nombreProveedor', $proveedor)
                ->select(
                    'historial_entregas.fechaEntrega as Fecha de entrega',
                    'historial_entregas.cantidad as Cantidad entregada',
                    'productos.nombreProducto as Nombre de producto'
                  )
                ->get();
      return response()->json($data);
    }

    public function ClientesPorCiudades()
    {
      $dataCiudades = Direccion::join('clientes', 'direccions.idDireccion', '=', 'clientes.direccion_id')
                ->select(
                    'direccions.ciudad'
                  )
                ->groupBy('direccions.ciudad')
                ->get();
      $dataCliente = Direccion::join('clientes', 'direccions.idDireccion', '=', 'clientes.direccion_id')
                ->select(
                    'clientes.nombreRazon',
                    'clientes.nitCi',
                    'direccions.ciudad'
                  )
                ->get();

      $listaCiudades = array();

      foreach ($dataCiudades as $key => $ciudad)
      {
        $listaCiudades[$ciudad->ciudad]= array();
      }

      foreach ($dataCliente as $key => $cliente)
      {
        foreach ($dataCiudades as $key => $ciudad)
        {
          if ($ciudad->ciudad == $cliente->ciudad) {
            array_push($listaCiudades[$ciudad->ciudad], $cliente);
          }
        }
      }

      return response()->json($listaCiudades);
    }

    public function ClientesPorCiudadesCantidad()
    {
      $data = Direccion::join('clientes', 'direccions.idDireccion', '=', 'clientes.direccion_id')
                ->select(
                    'direccions.ciudad',
                    DB::raw('count(clientes.nitCi) as "Cantidad de clientes"')
                  )
                ->groupBy('direccions.ciudad')
                ->get();
      return response()->json($data);
    }

    public function ProductosMas()
    {
      $data = Producto::join('historial_ventas', 'productos.idProducto', '=', 'historial_ventas.producto_id')
                ->select(
                    'productos.idProducto',
                    'productos.nombreProducto',
                    DB::raw('sum(historial_ventas.cantidad) as cantidad_productos_vendidos'),
                    DB::raw('count(historial_ventas.producto_id) as cantidad_pedidos')
                  )
                ->groupBy('historial_ventas.producto_id')
                ->orderBy('cantidad_pedidos', 'desc')
                ->orderBy('productos.nombreProducto')
                ->limit(3)
                ->get();
      return response()->json($data);
    }

    public function CategoriaMas()
    {
      $data = Categoria::join('productos', 'categorias.idCategoria', '=', 'productos.categoria_id')
                ->join('historial_ventas', 'productos.idProducto', '=', 'historial_ventas.producto_id')
                ->select(
                    'productos.idProducto',
                    'categorias.nombreCategoria',
                    'productos.nombreProducto',
                    DB::raw('sum(historial_ventas.cantidad) as cantidad_productos_vendidos'),
                    DB::raw('count(historial_ventas.producto_id) as cantidad_pedidos')
                  )
                ->groupBy('historial_ventas.producto_id')
                ->orderBy('cantidad_pedidos', 'desc')
                ->orderBy('productos.nombreProducto')
                ->limit(3)
                ->get();
      return response()->json($data);
    }

    public function CiudadMenosClientes()
    {
      $data = Direccion::join('clientes', 'direccions.idDireccion', '=', 'clientes.direccion_id')
                ->select(
                    'direccions.ciudad',
                    DB::raw('count(clientes.nombreRazon) as cantidad_clientes')
                  )
                ->groupBy('direccions.ciudad')
                ->orderBy('cantidad_clientes')
                ->limit(1)
                ->get();
      return response()->json($data);
    }

    public function CiudadCompras()
    {
      $data = Direccion::join('clientes', 'direccions.idDireccion', '=', 'clientes.direccion_id')
                ->join('compras', 'clientes.idCliente', '=', 'compras.cliente_id')
                ->join('ventas', 'compras.venta_id', '=', 'ventas.idVenta')
                ->join('historial_ventas', 'ventas.idVenta', '=', 'historial_ventas.venta_id')
                ->select(
                    'direccions.ciudad',
                    DB::raw('sum(historial_ventas.cantidad) as cantidad_productos_comprados')
                  )
                ->groupBy('direccions.ciudad')
                ->orderBy('cantidad_productos_comprados', 'desc')
                ->limit(1)
                ->get();
      return response()->json($data);
    }

    public function ClienteCompra()
    {
      $data = Cliente::join('compras', 'clientes.idCliente', '=', 'compras.cliente_id')
                ->select(
                    'clientes.nombreRazon',
                    DB::raw('count(compras.cliente_id) as cantidad_compras_efectuadas')
                  )
                ->groupBy('compras.cliente_id')
                ->orderBy('cantidad_compras_efectuadas', 'desc')
                ->limit(1)
                ->get();
      return response()->json($data);
    }

    public function Stock()
    {
      $data = Producto::join('almacens', 'productos.idProducto', '=', 'almacens.producto_id')
                ->select(
                    'productos.nombreProducto',
                    'almacens.cantidad as "Cantidad disponible"'
                  )
                ->where('almacens.cantidad', '>', '0')
                ->orderBy('productos.nombreProducto')
                ->get();
      return response()->json($data);
    }

}
