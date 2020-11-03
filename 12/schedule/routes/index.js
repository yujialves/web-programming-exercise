var express = require('express');
var router = express.Router();

var mysql = require('mysql');

var knex = require('knex')({
  dialect : 'mysql',
  connection: {
    host : 'localhost',
    user : 'root',
    password : 'root',
    database : 'node-schedule-app',
    charset : 'utf8'
  }
});

var Bookshelf = require('bookshelf')(knex);

Bookshelf.plugin('pagination');

var User = Bookshelf.Model.extend({
  tableName : 'users'
});

var Schedule = Bookshelf.Model.extend({
  tableName: "schedules",
  hasTimestamps: true,
  user: function() {
    return this.belongsTo(User);
  }
});

router.get('/', (req, res, next) => {
  if (req.session.login == null) {
    res.redirect('/users');
  } else {
    res.redirect('/1');
  }
});

router.get('/:page', (req, res, next) => {
  if (req.session.login == null) {
    res.redirect('/users');
    return;
  }
  var pg = req.params.page;
  pg *= 1;
  if (pg < 1) { pg = 1; }
  new Schedule().orderBy('created_at', 'DESC')
    .fetchPage({page:pg, pageSize:10, withRelated: ['user']})
    .then((collection) => {
    var data = {
      title: 'schedule',
      login:req.session.login,
      collection:collection.toArray(),
      pagination:collection.pagination
    };
    res.render('index',　data);
  }).catch((err) => {
    res.status(500).json({error: true, data: {message: err.message}});
  });

});

module.exports = router;
