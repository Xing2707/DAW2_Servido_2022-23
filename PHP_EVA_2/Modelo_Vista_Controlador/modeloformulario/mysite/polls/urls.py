from django.urls import path, re_path
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('holamundo/', views.saludo, name='saludo'),
    path('navegador/', views.navegador, name='navegador'),
]