from msilib.schema import ListView
from multiprocessing import context
from re import template
from django.shortcuts import render,redirect
from productoApp.models import Productos
from django.db.models import Q
from .forms import ProductoForm
from django.core.paginator import Paginator
from django.http import Http404
def listarproducto(request):
    queryset=request.GET.get("buscar")
    producto=Productos.objects.filter(estado=True)
    if queryset:
        producto=Productos.objects.filter(
            Q(nombre__icontains=queryset),estado=True
        ).distinct()
    context={'producto':producto}
    return render(request,"producto/listar.html",context)

def agregarproducto(request):
    form=ProductoForm()
    if request.method=="POST":
        form=ProductoForm(request.POST)
        if form.is_valid():
            form.save() 
            return redirect("listarproducto") 
        else:
            form=ProductoForm()
    context={'form':form} 
    return render(request,"producto/agregar.html",context)

def editarproducto(request,id):
    form=ProductoForm()
    producto=Productos.objects.get(id=id)
    if request.method=="POST":
        form=ProductoForm(request.POST,instance=producto)
        if form.is_valid():
            form.save() 
            return redirect("listarproducto") 
        else:
            form=ProductoForm(instance=producto)
    context={'producto':producto,'form':form} 
    return render(request,"producto/editar.html",context) 

def eliminarproducto(request,id):
    producto=Productos.objects.get(id=id) 
    producto.estado=False
    producto.save()
    return redirect("listarproducto") 

def listar_productos(request):
    productos = Productos.objects.all()
    page = request.GET.get('page',1)

    try:
        paginator = Paginator(productos,3)
        productos = paginator.page(page)
    except:
        raise Http404

    data = {
        'productos': productos
    }

    return render(request, 'producto/listar.html', data)