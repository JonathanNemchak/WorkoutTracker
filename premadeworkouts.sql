-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 05:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `premadeworkouts`
--

CREATE TABLE `premadeworkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `Bodypart` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `workout6` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `premadeworkouts`
--

INSERT INTO `premadeworkouts` (`id`, `Bodypart`, `workout1`, `workout2`, `workout3`, `workout4`, `workout5`, `workout6`) VALUES
(1, 'Bicep', 'Bicep Curl', 'Hammerhead Curl', 'Machine Bicep Curl', 'Preacher Curl', 'Chinups', '21s'),
(2, 'legs', 'Back Squat', 'Front Squat', 'Lunges', 'Single Leg Deadlift', 'Box Jumps', 'Step ups'),
(3, 'legs', 'Romanian Deadlift', 'Squat', 'Dumbbell Stepup', 'Deadlift', 'Swiss Ball Leg Curl', 'Single Leg Romanian Deadlift'),
(4, 'legs', 'Leg Press', 'Bodyweight Calf Raise', 'Walking Lunge', 'Pause Squat', 'Front Squat', 'Dumbbell Squat'),
(5, 'legs', 'Kettlebell Swing', 'Jump Squat', 'Reverse Lunge', 'Back Squat', 'Barbell Calf Raise', 'Skater Squat'),
(6, 'legs', 'Jumping Calf Raise', 'Barbell Hip Thrust', 'Glute Bridge Walkout', 'Seated Calf Raise', 'Deadlift', 'Lunge'),
(7, 'Bicep', 'Chin up', 'Alternating Incline Dumbbell Curl', 'Reverse Curl', 'Barbbell Curl', 'Dumbbell Curl', '21s'),
(8, 'Bicep', 'Preach Curl', 'Zottman Curl', 'Reverse Curl', 'Decline Dumbbell Curl', 'Concentration Curl', '21s'),
(9, 'Bicep', 'Cable Flex Curl', 'Seated Cable Row', 'Drag Curl', 'Barbell Curl', 'Hammerhead Curl', '21s'),
(10, 'Bicep', 'Concetration Curl', 'Zottman Curl', 'Standing Reverse Barbell Curl', 'Reverse Curl', 'Hammerhead Curl', '21s'),
(11, 'Chest', 'Bench Press', 'Cable Fly', 'Dumbbell Floor Press', 'Batwing Fly', 'Incline Chest Press', 'Decline Chest Press'),
(12, 'Chest', 'Bench Press', 'Close-Grip Bench Press', 'Pushup', 'Single-Arm Dumbbell Bench Press', 'Suspended Pushup', 'Chest Dip'),
(13, 'Chest', 'Bench Press', 'Decline Bench Press', 'Incline Bench Press', 'Pushup', 'Landmine Press', 'Chest Dip'),
(14, 'Chest', 'Bench Press', 'Pushup', 'Diamond Pushup', 'Chest Fly', 'Close-Grip Bench Press', 'Dumbbell Bench Press'),
(15, 'Chest', 'Pushup', 'Diamon Pushup', 'Wide Pushup', 'Knee Pushup', 'Jumping Pushup', 'Pause Pushup'),
(16, 'Back', 'Deadlift', 'Dumbbell Row', 'Lat Pulldown', 'Good Mornings', 'Lawn Mowers', 'Pullup'),
(17, 'Back', 'Deadlift', 'Inverted Row', 'Burpee', 'Supermans', 'Lat Raise', 'Pullup'),
(18, 'Back', 'Deadlift', 'Hang Clean', 'Back Extension', 'Seated Cable Row', 'Lat Pulldown', 'Pullup'),
(19, 'Back', 'Deadlift', 'Yates Row', 'Single Arm Cable Row', 'Bent Over Row to Neck', 'Snatch-Grip Rack Deadlift', 'Pullup'),
(20, 'Back', 'Deadlift', 'Romanian Deadlift', 'Landmine Row', 'Flexed-Arm Hang', 'Chinup', 'Pullup'),
(21, 'Tricep', 'Rope Tricep Pushdown', 'Close-Grip Bench Press', 'Tricep Dips', 'Skullcrushers', 'JM Press', 'Machine Pushdown'),
(22, 'Tricep', 'Rope Tricep Pushdown', 'Dumbbell Tricep Extension', 'Diamon Pushup', 'Bench Dip', 'Dumbbell Floor Press', 'Elbow Extensions'),
(23, 'Tricep', 'Rope Tricep Pushdown', 'Band Pushdowns', 'Underhand Cable Pushdowns', 'Skullcrushers', 'Isolated Tricep Extension', 'Tricep Dip'),
(24, 'Tricep', 'Rope Tricep Pushdown', 'Close-Grip Bench Press', 'JM Press', 'One Arm Kettlebell Floor Press', 'Deficit Pushup', 'Elbow Extensions'),
(25, 'Tricep', 'Rope Tricep Pushdown', 'Diamond Pushup', 'Deficit Pushup', 'Dummbell Floor Press', 'Bench Dip', 'Skullcrushers'),
(26, 'Forearm', 'Dead Hang', 'Behind-the-Back Cable Curl', 'Reverse Curl', 'Towell Pullup', 'Farmers Carry', 'Wrist Curl'),
(27, 'Forearm', 'Dead Hang', 'Reverse Wrist Curl', 'Dumbbell Rotates', 'Towell Curl', 'Farmers Carry', 'Grip Crush'),
(28, 'Forearm', 'Dead Hang', 'Reverse Curl 21s', 'Zottman Curl', 'Drag Curl', 'Bar Hand Walk', 'Crab Walk'),
(29, 'Forearm', 'Dead Hang', 'Wrist Roller', 'Rope Climb', 'One-Arm Bottoms-Up Kettlebell Press', 'Plate Pinch hold', 'Plate Curl'),
(30, 'Forearm', 'Dead Hang', 'Farmers Carry', 'Towell Row-to-Chest', 'Reverse Curl', 'Behind-the-Back Cable Curl', 'Wrist Curl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `premadeworkouts`
--
ALTER TABLE `premadeworkouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `premadeworkouts`
--
ALTER TABLE `premadeworkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
