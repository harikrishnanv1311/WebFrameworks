# Generated by Django 2.2 on 2019-04-21 20:13

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Polls',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('election_name', models.CharField(max_length=100)),
                ('date_of_election', models.DateTimeField(verbose_name='elec_date')),
            ],
        ),
        migrations.CreateModel(
            name='Choice',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('candidate', models.CharField(max_length=50)),
                ('cand_count', models.IntegerField(default=0)),
                ('election_name', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='register.Polls')),
            ],
        ),
    ]