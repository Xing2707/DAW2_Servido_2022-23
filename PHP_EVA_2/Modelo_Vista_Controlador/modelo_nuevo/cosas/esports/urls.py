from django.urls import path

from . import views

urlpatterns =[
    path('',views.index, name='index'),
    path('<str:nombre>/',views.detalle_equipo, name='esport_detalle_equipo'),
    path('juego/<str:nombre>/',views.detalle_juego, name='esport_detalle_juego'),
    path('genero/<str:nombre>/',views.detalle_genero, name='esport_detalle_genero'),
]