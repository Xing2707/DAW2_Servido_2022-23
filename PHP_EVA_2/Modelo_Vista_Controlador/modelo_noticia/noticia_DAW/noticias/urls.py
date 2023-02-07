from django.urls import path
from . import views

urlpatterns = [
    path('',views.lista_noticias, name='index'),
    path('<str:titulo>/',views.detalle_noticias, name='detalle de noticia'),
]