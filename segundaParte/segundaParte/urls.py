"""
URL configuration for segundaParte project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.urls import path,include 
from seguridadApp.views import acceder,homePage,salir
from django.contrib.auth import views
from productoApp.views import listarproducto,agregarproducto,editarproducto,eliminarproducto
urlpatterns = [ 
path('', acceder,name="login"),
path('home/',homePage ,name="home"),
path('logout/',salir,name="logout"), 
path('listaproducto/',listarproducto,name="listarproducto"),
path('agregarproducto/',agregarproducto ,name="agregarproducto"), 
path('editarproducto/<int:id>/',editarproducto ,name="editarproducto"), 
path('eliminarproducto/<int:id>/',eliminarproducto,name="eliminarproducto"), 
] 
