ALTER TABLE user_old CHANGE id_user id_user INT NOT NULL;
ALTER TABLE person CHANGE id_person id_person INT AUTO_INCREMENT NOT NULL;
ALTER TABLE review CHANGE id_review id_review INT AUTO_INCREMENT NOT NULL;
ALTER TABLE review_editor CHANGE id_revieweditor id_revieweditor INT AUTO_INCREMENT NOT NULL;
ALTER TABLE reviewer CHANGE id_reviewer id_reviewer INT AUTO_INCREMENT NOT NULL;
ALTER TABLE role CHANGE id_role id_role INT AUTO_INCREMENT NOT NULL;
ALTER TABLE schedule CHANGE id_schedule id_schedule INT AUTO_INCREMENT NOT NULL;
ALTER TABLE speaker CHANGE id_speaker id_speaker INT AUTO_INCREMENT NOT NULL;
ALTER TABLE speaker_work CHANGE id_speaker_work id_speaker_work INT AUTO_INCREMENT NOT NULL;
ALTER TABLE status CHANGE id_status id_status INT AUTO_INCREMENT NOT NULL;
DROP INDEX id_user ON user_role;
DROP INDEX id_role ON user_role;
ALTER TABLE user_role CHANGE id_user_role id_user_role INT AUTO_INCREMENT NOT NULL;
DROP INDEX id_user ON user_work;
DROP INDEX id_work ON user_work;
ALTER TABLE user_work CHANGE id_user_work id_user_work INT AUTO_INCREMENT NOT NULL;
ALTER TABLE work ADD path VARCHAR(255) DEFAULT NULL, CHANGE id_work id_work INT AUTO_INCREMENT NOT NULL;
ALTER TABLE work_version CHANGE id_work_version id_work_version INT AUTO_INCREMENT NOT NULL
