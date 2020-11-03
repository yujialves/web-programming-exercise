var express = require("express");
var router = express.Router();

var knex = require("knex")({
  dialect: "mysql",
  connection: {
    host: "localhost",
    user: "root",
    password: "root",
    database: "node-schedule-app",
    charset: "utf8"
  }
});

var Bookshelf = require("bookshelf")(knex);

var User = Bookshelf.Model.extend({
  tableName: "users"
});

var Schedule = Bookshelf.Model.extend({
  tableName: "schedules",
  hasTimestamps: true,
  user: function() {
    return this.belongsTo(User);
  }
});

router.get("/", (req, res, next) => {
  res.redirect("/");
  return;
});

router.get("/add", (req, res, next) => {
  var data = {
    title: "Schedules/add",
    form: {
      title: "",
      content: "",
      place: "",
      date: "",
      start_time: "",
      end_time: ""
    },
    content: "スケジュールを入力してください。"
  };
  res.render("schedules/add", data);
});

router.post("/add", (req, res, next) => {
  var result = {
    user_id: req.session.login.id,
    title: req.body.title,
    content: req.body.content,
    place: req.body.place,
    date: req.body.date,
    start_time: req.body.start_time,
    end_time: req.body.end_time
  };
  new Schedule(result).save().then(model => {
    res.redirect("/schedules");
  });
});

router.get("/edit/:id", (req, res, next) => {
  if (req.session.login == null) {
    res.redirect("/login");
    return;
  }
  Schedule.query({
    where: { user_id: req.session.login.id },
    andWhere: { id: req.params.id }
  })
    .fetch()
    .then(model => {
      var year = model.attributes.date.getFullYear();
      var month = ("0" + (model.attributes.date.getMonth() + 1)).slice(-2);
      var date = model.attributes.date.getDate();
      model.attributes.date = year + "-" + month + "-" + date;
      var data = {
        title: "Schedules/edit",
        id: req.params.id,
        form: {
          id: model.attributes.id,
          user_id: req.session.login.id,
          title: model.attributes.title,
          content: model.attributes.content,
          place: model.attributes.place,
          date: model.attributes.date,
          start_time: model.attributes.start_time,
          end_time: model.attributes.end_time
        }
      };
      res.render("schedules/edit", data);
    });
});

router.post("/edit/:id", (req, res, next) => {
  if (req.session.login == null) {
    res.redirect("/login");
    return;
  }
  var result = {
    id: req.params.id,
    user_id: req.session.login.id,
    title: req.body.title,
    content: req.body.content,
    place: req.body.place,
    date: req.body.date,
    start_time: req.body.start_time,
    end_time: req.body.end_time
  };
  new Schedule(result).save().then(model => {
    res.redirect("/schedules");
  });
});

router.get("/delete/:id", (req, res, next) => {
  if (req.session.login == null) {
    res.redirect("/login");
    return;
  }
  Schedule.query({
    where: { user_id: req.session.login.id },
    andWhere: { id: req.params.id }
  })
    .destroy()
    .then(model => {
      res.redirect("/schedules");
    });
});

module.exports = router;
