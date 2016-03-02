var mongoose = require('mongoose');

//MODELO DE SCHEMA

var dataBaseSchema = mongoose.Schema({
  	nome:{
  		type: String
  	}
});

var DataBase = module.exports = mongoose.model('DataBase', dataBaseSchema);

module.exports.getDataBases = function(callback, limit){
	DataBase.find(callback).limit(limit);



};
