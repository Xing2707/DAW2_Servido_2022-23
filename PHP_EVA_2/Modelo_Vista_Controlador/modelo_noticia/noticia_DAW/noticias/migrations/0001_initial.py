# Generated by Django 4.1.5 on 2023-02-03 15:48

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='noticias_DAW',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(max_length=100)),
                ('fecha', models.DateField()),
                ('descripcion', models.TextField()),
            ],
        ),
        migrations.CreateModel(
            name='imagen',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('fotos', models.ImageField(null=True, upload_to='media')),
                ('noticia', models.ForeignKey(null=True, on_delete=django.db.models.deletion.SET_NULL, to='noticias.noticias_daw')),
            ],
        ),
    ]
