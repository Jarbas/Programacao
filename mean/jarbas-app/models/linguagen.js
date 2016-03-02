var mongoose = require('mongoose');

//MODELO DE SCHEMA

var linguagenSchema = mongoose.Schema({
  	nome:{
  		type: String,
  		required : true
  	},
  	rank:{
       type : String
  	}
});

var Linguagen = module.exports = mongoose.model('Linguagen', linguagenSchema);

module.exports.getLinguagens = function(callback, limit){
	Linguagen.find(callback).limit(limit);

};

module.exports.getLinguagenById = function(id, callback){
	Linguagen.findById(id,callback);
};

module.exports.addLinguagen = function(linguagen, callback){
	Linguagen.create(linguagen,callback);
};

module.exports.updateLinguagen= function(id,linguagen, options, callback){
	var query = {_id:id};
    var update = {
         nome : linguagen.nome
    }

	Linguagen.findOneAndUpdade(query, update, options ,callback);
}

module.exports.removeinguagen = function(id, callback){
	var query = {_id:id};
	Linguagen.remove(query,callback);
};

