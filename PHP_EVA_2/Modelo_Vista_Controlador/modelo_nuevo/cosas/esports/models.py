from django.db import models

class Equipo(models.Model):
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField()
    anio = models.DateField()
    foto = models.ImageField(upload_to='media',null=True)

    def __str__(self) -> str:
        return f"nombre: {self.nombre}"

class Genero(models.Model):
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField()

    def __str__(self) -> str:
        return f"nombre: {self.nombre}"


class Juego(models.Model):
    genero = models.ForeignKey(Genero, on_delete=models.SET_NULL,null=True)
    equipo = models.ManyToManyField(Equipo,related_name='juegos')
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField()
    anio = models.DateField()

    def __str__(self) -> str:
        return f"nombre: {self.nombre}"


