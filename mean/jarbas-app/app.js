
/* declaraço dos modulos */

var express = require('express');
    app = express();
var bodyParser = require('body-parser');
var mongoose = require('mongoose');

app.use(bodyParser.json());

Linguagen = require('./models/linguagen');

DataBase = require('./models/dataBase');

/* conecxao com mongoDB */

	mongoose.connect('mongodb://localhost/jarbas');
	var db = mongoose.connection;	

	app.get('/', function(res, res) {

    res.send('JARBAS MEAN - Por favor utilize /api/Linguagens ou /api/DataBases');
	});

	app.get('/api/linguagens', function(req, res){
		Linguagen.getLinguagens(function(err, linguagens){
			if (err){

				throw err;
			};
			res.json(linguagens);
		});
	});

	app.get('/api/linguagens/:_id', function(req, res){
		Linguagen.getLinguagenById(req.params._id, function(err, linguagen){
			if (err){

				throw err;
			};
			res.json(linguagen);
		});
	});

	app.post('/api/linguagens', function(req, res){

		var linguagen = req.body;
		Linguagen.addLinguagen(linguagen, function(err, linguagen){
			if (err){

				throw err;
			};
			res.json(linguagen);
		});
	});


	app.put('/api/linguagens/:_id', function(req, res){

		var linguagen = req.body;
		var id = req.params._id;
		Linguagen.updateLinguagen(id, linguagen, {}, function(err, linguagen){
			if (err){

				throw err;
			};
			res.json(linguagen);
		});
	});

		app.delete('/api/linguagens/:_id', function(req, res){

		var id = req.params._id;
		Linguagen.removeinguagen(id, function(err, linguagen){
			if (err){

				throw err;
			};
			res.json(linguagen);
		});
	});


	app.get('/api/dataBases', function(req, res){
		DataBase.getDataBases(function(err, dataBases){
			if (err){

				throw err;
			};
			res.json(dataBases);
		});
	});


	app.listen(3000);
	console.log('Conectado porta 3000');


/*

https://www.youtube.com/watch?v=eB9Fq9I5ocs
app.use(express.logger());

app.get('/', function(req, res){
    res.send('JARBAS COLTRO MEAN');
});

var server = app.listen(3000);
console.log('Servidor Express iniciado na porta %s', server.address().port);*/
