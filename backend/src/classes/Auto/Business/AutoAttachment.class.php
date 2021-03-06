<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2018-01-04 16:10:53                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoAttachment extends IdentifiableObject
	{
		protected $createDate = null;
		protected $post = null;
		protected $postId = null;
		protected $publishToken = null;
		protected $published = false;
		protected $deleted = false;
		protected $deletedAt = null;
		protected $nsfw = false;
		protected $embed = null;
		protected $embedId = null;
		protected $images = null;
		
		/**
		 * @return Timestamp
		**/
		public function getCreateDate()
		{
			return $this->createDate;
		}
		
		/**
		 * @return Attachment
		**/
		public function setCreateDate(Timestamp $createDate)
		{
			$this->createDate = $createDate;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function dropCreateDate()
		{
			$this->createDate = null;
			
			return $this;
		}
		
		/**
		 * @return Post
		**/
		public function getPost()
		{
			if (!$this->post && $this->postId) {
				$this->post = Post::dao()->getById($this->postId);
			}
			
			return $this->post;
		}
		
		public function getPostId()
		{
			return $this->post
				? $this->post->getId()
				: $this->postId;
		}
		
		/**
		 * @return Attachment
		**/
		public function setPost(Post $post = null)
		{
			$this->post = $post;
			$this->postId = $post ? $post->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function setPostId($id = null)
		{
			$this->post = null;
			$this->postId = $id;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function dropPost()
		{
			$this->post = null;
			$this->postId = null;
			
			return $this;
		}
		
		public function getPublishToken()
		{
			return $this->publishToken;
		}
		
		/**
		 * @return Attachment
		**/
		public function setPublishToken($publishToken)
		{
			$this->publishToken = $publishToken;
			
			return $this;
		}
		
		public function getPublished()
		{
			return $this->published;
		}
		
		public function isPublished()
		{
			return $this->published;
		}
		
		/**
		 * @return Attachment
		**/
		public function setPublished($published = false)
		{
			$this->published = ($published === true);
			
			return $this;
		}
		
		public function getDeleted()
		{
			return $this->deleted;
		}
		
		public function isDeleted()
		{
			return $this->deleted;
		}
		
		/**
		 * @return Attachment
		**/
		public function setDeleted($deleted = false)
		{
			$this->deleted = ($deleted === true);
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getDeletedAt()
		{
			return $this->deletedAt;
		}
		
		/**
		 * @return Attachment
		**/
		public function setDeletedAt(Timestamp $deletedAt = null)
		{
			$this->deletedAt = $deletedAt;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function dropDeletedAt()
		{
			$this->deletedAt = null;
			
			return $this;
		}
		
		public function getNsfw()
		{
			return $this->nsfw;
		}
		
		public function isNsfw()
		{
			return $this->nsfw;
		}
		
		/**
		 * @return Attachment
		**/
		public function setNsfw($nsfw = null)
		{
			Assert::isTernaryBase($nsfw);
			
			$this->nsfw = $nsfw;
			
			return $this;
		}
		
		/**
		 * @return AttachmentEmbed
		**/
		public function getEmbed()
		{
			if (!$this->embed && $this->embedId) {
				$this->embed = AttachmentEmbed::dao()->getById($this->embedId);
			}
			
			return $this->embed;
		}
		
		public function getEmbedId()
		{
			return $this->embed
				? $this->embed->getId()
				: $this->embedId;
		}
		
		/**
		 * @return Attachment
		**/
		public function setEmbed(AttachmentEmbed $embed = null)
		{
			$this->embed = $embed;
			$this->embedId = $embed ? $embed->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function setEmbedId($id = null)
		{
			$this->embed = null;
			$this->embedId = $id;
			
			return $this;
		}
		
		/**
		 * @return Attachment
		**/
		public function dropEmbed()
		{
			$this->embed = null;
			$this->embedId = null;
			
			return $this;
		}
		
		/**
		 * @return AttachmentImagesDAO
		**/
		public function getImages($lazy = false)
		{
			if (!$this->images || ($this->images->isLazy() != $lazy)) {
				$this->images = new AttachmentImagesDAO($this, $lazy);
			}
			
			return $this->images;
		}
		
		/**
		 * @return Attachment
		**/
		public function fillImages($collection, $lazy = false)
		{
			$this->images = new AttachmentImagesDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->images->mergeList($collection);
			
			return $this;
		}
	}
?>