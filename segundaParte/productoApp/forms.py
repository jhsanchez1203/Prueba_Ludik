from django import forms 
from django.forms import fields 
from .models import Productos
class ProductoForm(forms.ModelForm):
    class Meta:
        model=Productos
        fields=['nombre','descripcion','precio','stock','estado'] 