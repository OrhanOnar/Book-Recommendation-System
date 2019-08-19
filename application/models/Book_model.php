<?php 
    class Book_model extends CI_Model {
        
        function get_read_books($admin_name){
            return $this->db->query("SELECT admin_read_id FROM admin WHERE admin_name='".$admin_name."' ")->result_array();
        }

        function get_rating_books($admin_name){
            return $this->db->query("SELECT admin_rating FROM admin WHERE admin_name='".$admin_name."' ")->result_array();
        }
        function get_future_books($admin_name){
            return $this->db->query("SELECT admin_future_id FROM admin WHERE admin_name='".$admin_name."'")->result_array();
        }

        function get_book($book_id){
            return $this->db->query("SELECT * FROM books WHERE book_id='".(int)$book_id."' LIMIT 1")->row(0,"array");
        }
        function get_book_name($book_id){
            return $this->db->query("SELECT book_name FROM books WHERE book_id='".(int)$book_id."' LIMIT 1")->row(0,"array");
        }
        function get_categories(){
            return $this->db->query("SELECT DISTINCT book_genre FROM books")->result_array();
        }

        function get_all_books(){
            return $this->db->query("SELECT * FROM books")->result_array();
        }

        function get_all_books_with_cat($data){
            return $this->db->query("SELECT * FROM books WHERE book_genre=".$this->db->escape($data)."")->result_array();
        }

        function update_read_books($data,$admin_id){
            return $this->db->query("UPDATE admin SET admin_read_id='".$data."' WHERE admin_id='".$admin_id."'");
        }

        function add_new_book($data){
        return $this->db->query("INSERT INTO books SET book_name=".$this->db->escape($data['name']).",book_author=".$this->db->escape($data['author']).", book_genre=".$this->db->escape($data['genre'])." ");
        }

        function get_book_category($book_id){
            return $this->db->query("SELECT book_genre FROM books WHERE book_id='".(int)$book_id."'")->row(0,"array");
        }

        function get_book_author($book_id){
            return $this->db->query("SELECT book_author FROM books WHERE book_id='".(int)$book_id."'")->row(0,"array");
        }
        function get_book_author_name($book_name){
            return $this->db->query("SELECT book_author FROM books WHERE book_name=".$this->db->escape($book_name)."")->row(0,"array");
        }
        function get_book_genre_name($book_name){
            return $this->db->query("SELECT book_genre FROM books WHERE book_name=".$this->db->escape($book_name)."")->row(0,"array");
        }
        function get_book_id_name2($book_name){
            return $this->db->query("SELECT book_id FROM books WHERE book_name=".$this->db->escape($book_name)."")->row(0,"array");
        }

        function get_book_id($book_id){
            return $this->db->query("SELECT * FROM books WHERE book_id='".(int)$book_id."'")->row(0,"array");
        }

        function get_book_id_name($book_name){
            return $this->db->query("SELECT book_id FROM books WHERE book_name=".$this->db->escape($book_name)."")->row(0,"array");
        }
        
        function get_recs($data){
            return $this->db->query("SELECT * FROM books WHERE book_genre='".$data['bcategory']."' AND book_id!='".$data['id']."'")->result_array();
        }

        function get_admins(){
            return $this->db->query("SELECT * FROM admin")->result_array();
        }

        function update_recs($data,$admin_id){
            $this->db->query("UPDATE admin SET admin_future_id='".$data."' WHERE admin_id='".$admin_id."'");
        }
        function update_recs_read($data,$admin_id){
            return $this->db->query("UPDATE admin SET admin_read_id='".$data."' WHERE admin_id='".$admin_id."'");
        }

        function update_recs_rating($data,$admin_id){
            return $this->db->query("UPDATE admin SET admin_rating='".$data."' WHERE admin_id='".$admin_id."'");
        }

    }
?>
