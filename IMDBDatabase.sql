CREATE TABLE "Movie"
(
  "year" date,
  title text,
  runtime date,
  "avgRating" integer,
  "movieID" integer NOT NULL,
  CONSTRAINT "movieID_PK" PRIMARY KEY ("movieID")
)

CREATE TABLE "Genre"
(
  "type" character(1),
  "genreID" integer NOT NULL,
  CONSTRAINT "genreID_PK" PRIMARY KEY ("genreID")
)

CREATE TABLE "MovieActor"
(
  "movieID" integer NOT NULL,
  "personID" integer NOT NULL,
  CONSTRAINT " ref movieID to movie" FOREIGN KEY ("movieID") REFERENCES "Movie" ("movieID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "ref personID  to person" FOREIGN KEY ("personID") REFERENCES "Person" ("personID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION
)

CREATE TABLE "MovieDirector"
(
  "movieID" integer NOT NULL,
  "personID" integer NOT NULL,
  CONSTRAINT "ref movieID  to movie" FOREIGN KEY ("movieID") REFERENCES "Movie" ("movieID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "ref personID  to Person" FOREIGN KEY ("personID") REFERENCES "Person" ("personID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION
)

CREATE TABLE "MovieGenre"
(
  "movieGenreID" integer NOT NULL,
  "movieID" integer NOT NULL,
  CONSTRAINT " ref genreID to Genre" FOREIGN KEY ("movieGenreID") REFERENCES "Genre" ("genreID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT " ref movieID to Movie" FOREIGN KEY ("movieID") REFERENCES "Movie" ("movieID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION
)
CREATE TABLE "Person"
(
  "personID" integer NOT NULL,
  "firstName" character(1)[] NOT NULL,
  "lastName" character(1)[] NOT NULL,
  birtdate date NOT NULL,
  CONSTRAINT "personID_PK" PRIMARY KEY ("personID")
)

CREATE TABLE "Review"
(
  "reviewedID" integer NOT NULL,
  "reviewedDate" date,
  message text,
  "movieID" integer NOT NULL,
  rating integer,
  "memberID" integer NOT NULL,
  CONSTRAINT "reviewedID" PRIMARY KEY ("reviewedID"),
  CONSTRAINT "ref memberID to member" FOREIGN KEY ("memberID") REFERENCES member ("memberID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "ref movieID  to movie" FOREIGN KEY ("movieID") REFERENCES "Movie" ("movieID") MATCH SIMPLE ON UPDATE NO ACTION ON DELETE NO ACTION
)

CREATE TABLE "Member"
(
  "memberID" integer NOT NULL,
  email character(1)[],
  "joinDate" date,
  "password" integer NOT NULL,
  CONSTRAINT "memberID_ PK" PRIMARY KEY ("memberID")
)