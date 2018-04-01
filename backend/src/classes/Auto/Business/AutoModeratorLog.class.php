<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-29 18:26:37                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoModeratorLog extends IdentifiableObject
	{
		protected $board = null;
		protected $boardId = null;
		protected $eventDate = null;
		protected $eventUser = null;
		protected $eventUserId = null;
		protected $eventType = null;
		protected $eventTypeId = null;
		
		/**
		 * @return Board
		**/
		public function getBoard()
		{
			if (!$this->board && $this->boardId) {
				$this->board = Board::dao()->getById($this->boardId);
			}
			
			return $this->board;
		}
		
		public function getBoardId()
		{
			return $this->board
				? $this->board->getId()
				: $this->boardId;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setBoard(Board $board)
		{
			$this->board = $board;
			$this->boardId = $board ? $board->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setBoardId($id)
		{
			$this->board = null;
			$this->boardId = $id;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function dropBoard()
		{
			$this->board = null;
			$this->boardId = null;
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getEventDate()
		{
			return $this->eventDate;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setEventDate(Timestamp $eventDate)
		{
			$this->eventDate = $eventDate;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function dropEventDate()
		{
			$this->eventDate = null;
			
			return $this;
		}
		
		/**
		 * @return User
		**/
		public function getEventUser()
		{
			if (!$this->eventUser && $this->eventUserId) {
				$this->eventUser = User::dao()->getById($this->eventUserId);
			}
			
			return $this->eventUser;
		}
		
		public function getEventUserId()
		{
			return $this->eventUser
				? $this->eventUser->getId()
				: $this->eventUserId;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setEventUser(User $eventUser)
		{
			$this->eventUser = $eventUser;
			$this->eventUserId = $eventUser ? $eventUser->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setEventUserId($id)
		{
			$this->eventUser = null;
			$this->eventUserId = $id;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function dropEventUser()
		{
			$this->eventUser = null;
			$this->eventUserId = null;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLogEventType
		**/
		public function getEventType()
		{
			if (!$this->eventType && $this->eventTypeId) {
				$this->eventType = new ModeratorLogEventType($this->eventTypeId);
			}
			
			return $this->eventType;
		}
		
		public function getEventTypeId()
		{
			return $this->eventType
				? $this->eventType->getId()
				: $this->eventTypeId;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setEventType(ModeratorLogEventType $eventType)
		{
			$this->eventType = $eventType;
			$this->eventTypeId = $eventType ? $eventType->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function setEventTypeId($id)
		{
			$this->eventType = null;
			$this->eventTypeId = $id;
			
			return $this;
		}
		
		/**
		 * @return ModeratorLog
		**/
		public function dropEventType()
		{
			$this->eventType = null;
			$this->eventTypeId = null;
			
			return $this;
		}
	}
?>