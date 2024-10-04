from msilib.schema import Directory
from django.db import models

# Create your models here.
class Productos(models.Model):
    id = models.AutoField(primary_key = True)
    nombre = models.CharField(max_length=150)
    descripcion = models.CharField(max_length=1000)
    precio = models.DecimalField(max_digits=10, decimal_places=2)
    stock = models.IntegerField()
    estado = models.BooleanField()
    def __str__(self) -> str:
        return self.descripcion
