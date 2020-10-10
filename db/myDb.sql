create table games(
  game_id int,
  name_game VARCHAR(40),
  genre varchar(40),
  type_game varchar(20),
  primary key(game_id)
);
create TABLE table_top(
  game_id int,
  max_num_players int,
  min_num_players int,
  primary key(game_id),
  constraint tt_game_id
  foreign key(game_id)
    references games(game_id)
);
create table cards(
  game_id int,
  num_cards int,
  primary key(game_id),
  constraint cc_game_id
  foreign key(game_id)
    references games(game_id)
);
create table pen_paper(
  game_id int,
  version varchar(15),
  primary key(game_id),
  constraint pp_game_id
  foreign key(game_id)
    references games(game_id)
);
