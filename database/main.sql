CREATE TABLE forum_categories (
	name VARCHAR PRIMARY KEY,
	display_order INTEGER NOT NULL
);

CREATE TABLE forum_topics (
	name VARCHAR PRIMARY KEY,
	category VARCHAR NOT NULL REFERENCES forum_categories(name) ON DELETE CASCADE,
	display_order INTEGER NOT NULL
);

CREATE TABLE forum_threads (
	id SERIAL PRIMARY KEY,
	title VARCHAR NOT NULL, 
	topic VARCHAR NOT NULL REFERENCES forum_topics(name) ON DELETE CASCADE
);

CREATE TABLE forum_posts (
	id SERIAL PRIMARY KEY,
	date_posted TIMESTAMP DEFAULT NOW(),
	content TEXT NOT NULL,
	thread INTEGER NOT NULL REFERENCES forum_threads(id) ON DELETE CASCADE
);