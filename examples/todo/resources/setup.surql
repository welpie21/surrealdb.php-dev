
-- ------------------------------
-- TABLE: task
-- ------------------------------

DEFINE TABLE task TYPE NORMAL SCHEMAFULL PERMISSIONS FULL;

DEFINE FIELD created_at ON task TYPE datetime DEFAULT time::now() PERMISSIONS FULL;
DEFINE FIELD name ON task TYPE string PERMISSIONS FULL;
DEFINE FIELD done ON task TYPE bool DEFAULT false PERMISSIONS FULL;
DEFINE FIELD updated_at ON task TYPE datetime VALUE time::now() PERMISSIONS FULL;