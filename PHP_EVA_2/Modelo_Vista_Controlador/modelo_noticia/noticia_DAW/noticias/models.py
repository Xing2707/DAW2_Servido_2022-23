from django.db import models

class noticias_DAW(models.Model):
    titulo = models.CharField(max_length=100)
    fecha = models.DateField()
    descripcion = models.TextField()

    def __str__(self) -> str:
        return self.titulo

class imagen(models.Model):
    fotos = models.ImageField(upload_to='media',null=True)
    noticia = models.ManyToManyField(noticias_DAW,related_name='imagen') 
